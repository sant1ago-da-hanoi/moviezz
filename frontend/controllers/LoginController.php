<?php
require_once 'models/User.php';

class LoginController {
    public $content;
    public $error;
    /* Google recaptcha API url */
    private $google_url = "https://www.google.com/recaptcha/api/siteverify";
    private $secret = '6LfVE0oaAAAAANCq_okg1lRPIFEudbngZE5MiaIW';

    public function render($file, $variables = []) {
        extract($variables);
        ob_start();
        require_once $file;
        return ob_get_clean();
    }

    public function login() {
        if (isset($_SESSION['user'])) {
            header('Location: home');
            exit();
        }
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $response = $_POST['g-recaptcha-response'];
            $user_model = new User();
            if (empty($this->error)) {
                $user = $user_model->getUserByUsernameAndPassword($username, $password);
                if (empty($user)) {
                    $this->error = 'Wrong username or password';
                    if (!$response) {
                        $this->error = "Please re-enter captcha";
                    } else {
                        $verify = file_get_contents($this->google_url.'?secret='.$this->secret.'&response='.$response);
                        $verified = json_decode($verify);
                        if (!($verified->success)) {
                            $this->error = "Your account has been logged as a spammer, you cannot continue!";
                        }
                    }
                } else {
                    $_SESSION['user'] = $user;
                    header("Location: home");
                    exit();
                }
            }
        }
        $this->content = $this->render('views/users/login.php');
        $this->page_title = 'Sign In';

        require_once 'views/layouts/main_login.php';
    }

    public function register() {

        if (isset($_POST['submit'])) {
            $user_model = new User();
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $user = $user_model->getUserByUsername($username);
            if (empty($username) || empty($password) || empty($password_confirm)) {
                $this->error = 'Fields could not be empty';
            } else if ($password != $password_confirm) {
                $this->error = 'Password confirm incorrect';
            } else if (!empty($user)) {
                $this->error = 'Username is unavailable';
            }
            if (empty($this->error)) {

                $user_model->username = $username;
                $user_model->fullname = $fullname;
                $user_model->password = md5($password);
                $user_model->status = 1;
                $is_insert = $user_model->insertRegister();
                if ($is_insert) {
                    $_SESSION['success'] = 'Sign up successful';
                } else {
                    $_SESSION['error'] = 'Sign up failed';
                }
                header('Location: sign-in');
                exit();
            }
        }

        $this->content = $this->render('views/users/register.php');
        $this->page_title = 'Sign Up';
        require_once 'views/layouts/main_login.php';
    }
}

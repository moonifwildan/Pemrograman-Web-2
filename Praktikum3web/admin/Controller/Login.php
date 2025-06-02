<?php
// Controller/Login.php
class Login
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function loginAction($email, $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $stmt->execute([$email, md5($password)]);
        $user = $stmt->fetch();

        if ($user) {
            session_start();
            $_SESSION['user'] = $user; // simpan data user di session
            header("Location: index.php?success=Login successful");
            exit();
        } else {
            header("Location: login.php?error=Email atau password salah!");
            exit();
        }
    }
}

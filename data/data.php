<?php
// $dsn = 'pgsql:host=localhost;port=5432;dbname=suividette;';
// $username = 'fatimata';
// $password = 'passer123';


// try {
//     $pdo = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
//     echo "Connexion réussie!";
// } catch (PDOException $e) {
//     echo "Erreur de connexion : " . $e->getMessage();
// }

// // Exemple de requête SELECT
// $query = $pdo->query("SELECT * FROM Paiement");

// while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
//     print_r($row);
// }


class Database
{
    private static $instance = null;
    private $pdo;
    private $host;
    private $dbName;
    private $username;
    private $password;
    private $options;

    private function __construct()
    {
        $config = require '../config/config.php';
        $this->host = $config['database']['connection'];
        $this->dbName = $config['database']['name'];
        $this->username = $config['database']['username'];
        $this->password = $config['database']['password'];
        $this->options = $config['database']['options'];

        $this->pdo = new PDO(
            "{$this->host};dbname={$this->dbName}",
            $this->username,
            $this->password,
            $this->options
        );
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}

?>

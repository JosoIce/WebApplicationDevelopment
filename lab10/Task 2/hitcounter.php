<?php
    class HitCounter {
        // Properties
        public $dbServer;
        public $dbUser;
        public $dbPasswd;
        public $dbName;
        public $hits;
        public $conn;

        // Methods
        function __construct($dbServer, $dbUser, $dbPasswd, $dbName) {
            $this->dbServer = $dbServer;
            $this->dbUser = $dbUser;
            $this->dbPasswd = $dbPasswd;
            $this->dbName = $dbName;

            $this->conn = @mysqli_connect($this->dbServer, $this->dbUser, $this->dbPasswd) or die('Failed to connect to server');
        }

        function getHits() {
            @mysqli_select_db($this->conn, $this->dbName);

            if (!$this->conn) {
                echo "<p>connection didn't work</p>";
            } else {
            
                $query = "SELECT hits FROM hitcounter";

                $result = mysqli_query($this->conn, $query);

                if (!$result) {
                    echo "<p>Query didn't work</p>\n";
                    printf("error: %s\n", mysqli_error($this->conn));
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $this->hits = $row["hits"];
                        return $this->hits;
                    }
                }
            }
        }

        function setHits() {
            @mysqli_select_db($this->conn, $this->dbName);

            if (!$this->conn) {
                echo "<p>connection didn't work</p>";
            } else {
            
                $query = "UPDATE hitcounter SET hits = hits +1 WHERE id = 1";

                $result = mysqli_query($this->conn, $query);

                if (!$result) {
                    echo "<p>Query didn't work</p>\n";
                    printf("error: %s\n", mysqli_error($this->conn));
                } else {
                }
            }
        }

        function closeConnection() {
            return mysqli_close($this->conn);
        }

        function startOver() {
            @mysqli_select_db($this->conn, $this->dbName);

            $this->hits = 0;

            if (!$this->conn) {
                echo "<p>connection didn't work</p>";
            } else {
            
                $query = "UPDATE hitcounter SET hits = 0 WHERE id = 1";

                $result = mysqli_query($this->conn, $query);

                if (!$result) {
                    echo "<p>Query didn't work</p>\n";
                    printf("error: %s\n", mysqli_error($this->conn));
                } else {
                }
            }
        }
    }
?>
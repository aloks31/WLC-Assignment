<?php
// There are a number of servers running our application.

// Given N servers, in 5 minutes interval, every minute, the load is checked and if load is
// less than 50%, the servers are either reduced to N/2 else they are increased to
// 2N + 1

// Input : No. of servers (N), server load every minute

// Output : The number of servers running at the end of 5 minutes

// Example:

// Input:
// 2 (2 servers)
// 10 60 50 15 20 (On 1st minute - 10% load, on 2nd minute - 60% load & so on)

// Output:
// 1 (After 5 minute, 1 server is running)

$server = 2;
$load = [10, 60, 50, 15, 20];

//your code here

class MyClass {
    public static function main() {
        $server = 2;
        $load = [10, 60, 50, 15, 20];

//first we iterate in load time than we check load time is less than or greater 50%
// if load time is grater than or equal to 50% than server time = server*2 + 1;
// else server time = server/2;

        for ($i = 0; $i < count($load); $i++) {
            if ($load[$i] >= 50) {
                $server = $server * 2 + 1;
            } else {
                $server = floor($server / 2);
            }
        }

        echo "Server = " . $server;
    }
}

MyClass::main();

// print($server);
?>


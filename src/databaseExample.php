<?php

{
    "autoload": {
    "psr-4": {
        "Project9\\": "src/"
        }
    },
    "require": {
        "smarty/smarty:"
        "ext.pdo": "*";
}
}
?>

<?php

namespace Project9;

interface Database
{

    public function connect();
    public function select();
    public function insert();
    public function update();
    public function delete();
}

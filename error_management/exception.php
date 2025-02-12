<?php

    error_reporting(0);

    function errorHandler($errno, $errstr, $errfile, $errline) {
        include "error.php";
    }

    function fatalErrorHandler() {
        $error = error_get_last();

        errorHandler($error["type"], $error["message"], $error["file"], $error["line"]);
    }

    class MyError extends Exception {
        public function bomb() {
            errorHandler($this->code, $this->message, $this->file, $this->line);
        }
    }

    // try {
    //     throw new MyError("This is an error");
    // } catch (MyError $exception) {
    //     echo $exception->bomb();
    // }

    set_error_handler("errorHandler", E_ALL);

    register_shutdown_function("fatalErrorHandler");

    echo $name;
    // hi();
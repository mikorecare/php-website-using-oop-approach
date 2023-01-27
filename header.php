<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<?php include "scripts.php"; ?>
<style>
    table {
        table-layout: fixed;
    }

    td {
        text-align: left;
        padding: 1.5%;
        font-size: 15px;
    }

    label {
        display: inline-block;
        text-overflow: ellipsis;
        font-size: 15px;
    }

    .form-group {
        padding-top: 1%;
        padding-bottom: 1%;
    }

    .form-control {
        display: inline-block;
        width: 25%;
    }

    .delete-checkbox {
        padding: 10px;
    }

    .product-data {
        border: 1px solid;
        padding: 4%;
    }

    .data-holder {
        font-family: serif;
        text-align: center;
        padding-bottom: 8%;
    }

    .btn-container {
        display: flex;
        padding-right: 1%;
        padding-left: 10%;
        align-items: right;
    }

    .btn {
        height: min-content;
        border: 1px solid;
        box-shadow: 2px 2px;
        margin-right: 5px;
        margin-left: 20px;
    }

    .hidden {
        display: none;
    }

    .main-body {
        padding: 5%;
        width: 100%;
    }

    .row {
        display: flex;
    }

    .hr-top {}

    .product-info{
        text-align: justify;
        color: red;
        font-size: 12px;
    }
</style>
<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission {

    public const CREATE_USERS = "create-users";
    public const READ_USERS = "read-users";
    public const UPDATE_USERS = "update-users";
    public const DELETE_USERS = "delete-users";

    public const CREATE_WORKER = "create-worker";
    public const READ_WORKER = "read-worker";
    public const UPDATE_WORKER = "update-worker";
    public const DELETE_WORKER = "delete-worker";

    public const CREATE_SUPPLIER = "create-supplier";
    public const READ_SUPPLIER = "read-supplier";
    public const UPDATE_SUPPLIER = "update-supplier";
    public const DELETE_SUPPLIER = "delete-supplier";

    public const CREATE_MEANS = "create-means";
    public const READ_MEANS = "read-means";
    public const UDPATE_MEANS = "update-means";
    public const DELETE_MEANS = "delete-means";

    public const CREATE_VAT = "create-vat";
    public const READ_VAT = "read-vat";
    public const UPDATE_VAT = "update-vat";
    public const DELETE_VAT = "delete-vat";

    public const CREATE_ACCOUNTING = "create-accounting";
    public const READ_ACCOUNTING = "read-accounting";
    public const UPDATE_ACCOUNTING = "update-accounting";
    public const DELETE_ACCOUNTING = "delete-accounting";

    public const CREATE_SITE = "create-site";
    public const READ_SITE = "read-site";
    public const UPDATE_SITE = "update-site";
    public const DELETE_SITE = "delete-site";
    
}
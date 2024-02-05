<?php

$u = \Encore\Admin\Facades\Admin::user();
if ($u != null) {
    $roles = $u->roles;
    if ($roles->count() < 1) {
        //time to assign role 2 to this user sql insert into admin_role_users (role_id, user_id) values (2, 1);
        $sql = "insert into admin_role_users (role_id, user_id) values (2, " . $u->id . ")";
        \DB::insert($sql);
    }
    // die("You are already logged in");
}

Encore\Admin\Form::forget(['map', 'editor']);

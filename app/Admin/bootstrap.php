<?php

/* 
faker to gerate books 
with fillowing titles

	id	created_at	updated_at	title	description	details	image	file	tags	category	created_by_id	author	other_authors	publication_year	publisher	isbn	pages	volume	edition	language	country	city	views	downloads	likes	dislikes	comments	shares	


*/

//faker 


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

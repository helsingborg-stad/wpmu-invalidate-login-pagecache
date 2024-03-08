<?php

/*
Plugin Name:    WPMU Invalidate Login Pagecache
Description:    Invalidates pagecache on submit of the login form.
Version:        1.0.0
Author:         Sebastian Thulin
*/

namespace WPMUInvalidateLoginPagecache;

class WPMUInvalidateLoginPagecache
{
    public function __construct()
    {
    }

    public function func($a)
    {
    }
}

new \WPMUInvalidateLoginPagecache\WPMUInvalidateLoginPagecache();

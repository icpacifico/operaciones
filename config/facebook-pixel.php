<?php

return [
    
    /*
     * The Facebook Pixel id, should be a code that looks something like "XXXXXXXXXXXXXXXX".
     */
    'facebook_pixel_id' => env('FACEBOOK_PIXEL_ID', '1727543543972159'),
    
    /*
     * Use this variable instead of `facebook_pixel_id` if you need to use multiple facebook pixels
     */
    'facebook_pixel_ids' => [],
    
    /*
     * Enable or disable script rendering. Useful for local development.
     */
    'enabled'           => false,

    'csp_callback'      => '',
];
<?php

if (!function_exists('uploadImage')) {
    function uploadImage($image, $path = 'uploads/', $oldImage = null)
    {
        if ($image) {
            // Delete old image if exists
            if ($oldImage && file_exists(public_path($oldImage))) {
                unlink(public_path($oldImage));
            }

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($path), $imageName);

            return $path . $imageName;
        }

        return null;
    }
}



?>
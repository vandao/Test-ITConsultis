<?php

/**
 * retrieve a value from a deeply nested array using "dot" notation
 */
function get_deep_value($array, $path)
{
	$keys = explode('.', $path);

	foreach ($keys as $subKey) {
		if (isset($array[$subKey])) {
			$array = $array[$subKey];
		} else {
			echo "key not found\n"; // for debug
			return null; // key not found
		}
	}

	var_dump($array); // for debug
	return $array;
}


$product = [
	"id" => 1,
	"feature_image" => [
		'large' => 'http://example.com/images/large.jpg',
		'medium' => 'http://example.com/images/medium.jpg',
		'small' => 'http://example.com/images/small.jpg',
	]
];

// example usage
get_deep_value($product, 'feature_image.large'); // http://example.com/images/large.jpg
get_deep_value($product, 'feature_image.small'); // http://example.com/images/small.jpg
<?php
if (!function_exists('get_client_weather')) {
    function get_client_weather($client_id)
    {
        $CI = &get_instance();
        $CI->load->model('Client_model');
        $client = $CI->Client_model->get_client($client_id);
        $country = $client->country;
        // Construct the API URL with the client's country
        $api_key = '54a624731e7a487b9f7105124220307';
        $api_url = "http://api.weatherapi.com/v1/current.json?key=$api_key&q=$country&aqi=no";

        // Use the HTTP library to make a GET request to the API URL
        // $response = $this->http->get($api_url);
        $response = file_get_contents($api_url);


        // Parse the JSON response and return the weather data
        $weather_data = json_decode($response, true);
        return $weather_data['current']['temp_c'];
    }
}

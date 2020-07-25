<?php 
class Shortener {
    protected $db;

    public function __construct() {

        $this->db = new mysqli('localhost', 'root', '', 'linkovi');
    }

    protected function generateCode($num) {
        return base_convert($num, 10, 36);

    }

    public function makeCode($url) {
        $url = trim($url);

        if(!filter_var($url, FILTER_VALIDATE_URL)) {
            return '';

        }

        $url = $this->db->escape_string($url);

        // provjera da li url vec postoji
    $exists = $this->db->query("SELECT code FROM linkovi WHERE url = '{$url}'");

    if($exists->num_rows) {
        return $exists->fetch_object()->code;
        //Ako postoji vraćamo kod
    } else {
        // Generišemo i spremamo url i kod
        $this->db->query("INSERT INTO linkovi (url, created) VALUES ('{$url}', NOW())");

        // generisemo kod 
        $code = $this->generateCode($this->db->insert_id);

        //Upisujemo u bazu
        $this->db->query("UPDATE linkovi SET code = '{$code}' WHERE url = '{$url}'");

        return $code;
    }
}

    public function getUrl($code) {
        $code = $this->db->escape_string($code);
        $code = $this->db->query("SELECT url FROM linkovi WHERE code= '$code'");

        if($code->num_rows) {
            return $code->fetch_object()->url;
        }
    }
}
<?php
function totalkriteria()
{
    $ci = get_instance();   
    $ci->db->count_all('kriteria');
}
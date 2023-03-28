<?php

class Arrays{
    public $dashboard = [
        "item1" => array(
            "Name" =>"Productos",
            "Icon" =>"bx bx-box",
        ) ,
        
        "item2" => array(
            "Name" => "Order List",
            "Icon" => "bx bx-list-ul",
        ),
        "item3" => array(
            "Name" => "Analytics",
            "Icon" => "bx bx-pie-chart-alt-2",
        ) ,
        "item4" => array(
            "Name" => "Stock",
            "Icon" => "bx bx-coin-stack",
        ),
        
        "item5" => array(
            "Name" => "Total Order",
            "Icon" => "bx bx-book-alt",
        ), 
        "item6" => array(
            "Name" => "Team",
            "Icon" => "bx bx-user",
        ),
        "item7" => array(
            "Name" => "Messages",
            "Icon" => "bx bx-message",
        ),
         
        "item8" => array(
            "Name" => "Favorites",
            "Icon" => "bx bx-heart",
        ),
        "item9" => array(
            "Name" => "Setting",
            "Icon" => "bx bx-cog",
        ),
        
        "item10" => array(
            "Name" => "Log out",
            "Icon" => "bx bx-log-out"
        ),
         
    ];

    function returnDashboard(){
        return $this->dashboard;
    }
}
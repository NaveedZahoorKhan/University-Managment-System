<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author WaH33D Khan
 */
interface University {
    function createStudent();
    function removeUser();
    function banStudent();
    function addFaculty();
    function removeFaculty();
    function sessions();
    function attendence();
    function dues();
    function scholarship();
    function fines();
    function addSalary();
    function setBonus($bonus);
   
   
}

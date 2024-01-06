<?php

           $timestamp (0,0,0,02,23,18)
            function formaterDate($timestamp){
                $jour = array('Dim.','Lun.','Mar.','Mer.','Jeu.','Ven.','Sam.');
                $mois = array('Jan','Fév','Mar','Avr','Mai','Juin','Juil','Aoû','Sep','Oct','Nov','Déc');
            
                $date = date('G', $timestamp)."h ".date('i', $timestamp)."min ".$jour[date('w', $timestamp)]." "
                  .date('d', $timestamp)." ".$mois[date('m', $timestamp)-1]." ".date('Y', $timestamp);
            
                return $date;
            }
            ?>           
<style type="text/css">
<!--
.pgoff {font-family:  Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif; font-size: 12px; color: #1DEA13; text-decoration: none}
a.pg {font-family:  Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif; font-size: 12px; color: #FFF; text-decoration: none}
a:hover.pg {font-family:  Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif; font-size: 12px; color: #0066cc; text-decoration:underline}
-->
</style>
<?php
        $quant_pg = ceil($quantreg/$numreg);
        $quant_pg++;
        
        // Verifica se esta na primeira página, se nao estiver ele libera o link para anterior
        if ( $pg > 0) { 
                echo "<a href=".$PHP_SELF."?pg=".($pg-1) ."class=pg><b><img src=\"img/prev.png\" align='absmidlle'></b></a>";
        } else { 
                echo "<font color=#CCCCCC ><img src=\"img/prev.png\"  align='absmidlle'></font>";
        }
        
        // Faz aparecer os numeros das página entre o ANTERIOR e PROXIMO
        for($i_pg=1;$i_pg<$quant_pg;$i_pg++) { 
                // Verifica se a página que o navegante esta e retira o link do número para identificar visualmente
                if ($pg == ($i_pg-1)) { 
                        echo "&nbsp;<span class=pgoff>[$i_pg]</span>&nbsp;";
                } else {
                        $i_pg2 = $i_pg-1;
                        echo "&nbsp;<a href=".$PHP_SELF."?pg=$i_pg2 class=pg><b>$i_pg</b></a>&nbsp;";
                }
        }
        
        // Verifica se esta na ultima página, se nao estiver ele libera o link para próxima
        if (($pg+2) < $quant_pg) { 
                echo "<a href=".$PHP_SELF."?pg=".($pg+1)." class=pg><b><img src=\"img/next.png\"  align='absmidlle'></b></a>";
        } else { 
                echo "<font color=#CCCCCC ><img src=\"img/next.png\"  align='absmidlle'></font>";
        }
?>
#!/usr/bin/perl

print "Content-type: text/html\n\n";

`quota | tail -n1` =~ / +(\d+) +(\d+)/;

my $used_Ko  = sprintf "%d", $1*16; 
my $used_Mo  = sprintf "%.2f", ($1*16)/1024; 

my $total_Ko = sprintf "%.0f", $2*16;
my $total_Mo = sprintf "%d", ($2*16)/1024;

my $remain_Ko = sprintf "%.0f", $total_Ko - $used_Ko;
my $remain_Mo = sprintf "%.2f", ($total_Ko - $used_Ko)/1024;

my $pc = sprintf "%d", ($1/$2)*100;


print "<html><head><title>Espace disque</title></head><body>\n";

print "<table border=0 align=center cellspacing=3>\n";
print "<tr><td colspan=2 align=center><h1>Etat de votre espace disque</h1></td></tr>\n";
print "<tr><td>&nbsp;</td></tr>";
print "<tr><th align=right> Espace total disponible :</th><th align=left> $total_Mo Mo</th></tr>\n";
print "<tr><th align=right> Espace utilis&eacute; :</th><td>  $used_Ko Ko ($used_Mo Mo) ($pc%)</td></tr>\n";
print "<tr><th align=right> Espace restant :</th><td>  $remain_Ko Ko ($remain_Mo Mo) </td></tr>\n";
print "<tr><td>&nbsp;</td></tr>";
print "<tr><td colspan=2 align=center><a href=\".\">Retour au panel</a></td></tr>\n";
print "</table>\n";

print "</body></html>";

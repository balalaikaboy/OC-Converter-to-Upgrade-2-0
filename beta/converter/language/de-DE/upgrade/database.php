<?php
// Heading
$_['heading_title']                 = 'Upgrade of Database';
// Text
$_['text_exa_store_path']       = '<br><span class="script-filename">Help: The path to the file to your server is: <em>%s</em>.</span>';
$_['text_intro_1']		= 'Dieses Programm ist nur zum Update von OpenCart-Versionen 1.4.7 - 2.0.0.0 auf OpenCart 2.x';
$_['text_intro_2']		= 'Der folgende Updateprozess besteht aus 3 Schritten:<ol><li>Datenbak überprüfen und fehlende Tabellen hinzufügen, Felder anpassen</li><li>Aktualisierung der Konfigurationsdateien (Shop &amp; Admin)</li><li>Anpassung der Bilderpfade</li></ol>';
$_['text_intro_3']		= 'Der Aktualisierungsprozess kann simuliert werden.<br />Dazu unterstehende Option aktivieren, es werden dann keine wirklichen Operationen durchgeführt';
$_['text_off']			= 'AUS';
$_['text_on']			= 'AN';
$_['text_simulation']	        = 'Simulation ist';
$_['text_step_1_3']		= 'Schritt 1 / 3';
$_['text_step_2_3']		= 'Schritt 2 / 3';
$_['text_toggle_help']	        = 'Hilfe Anzeigen/Verbergen';
$_['text_update_config']        = 'Falls noch nicht bereits erledigt, können jetzt die <b>Konfiguationsdateien</b> aktualisiert werden';
$_['text_upgrade_info']         = 'Upgrade of Database';
$_['text_upgrade_config']       = 'Upgrade of Configuration';
// Entry
$_['entry_adminDir']    	= 'Name des Adminordners';
$_['entry_imageDir']		= 'Name of  image directory';
$_['entry_oldDir']		= 'Pfad der alten Installation';
$_['entry_perms']		= 'Schreibrechte Server';
// Btn
$_['btn_config']		= 'Konfigurationsdateien aktualisieren';
$_['btn_skip']			= 'Überspringen';
$_['btn_start']			= 'Starte mit Aktualisierung';
$_['button_database']           = 'To Upgrade Database';
// Header
$_['header_step_2']		= 'Datenbank erfolgreich aktualisiert';
// Help
$_['help_adminDir']		= 'Nur anpassen wenn nicht admin lautet';
$_['help_ops']			= 'Vorgänge anzeigen <small>(zeigt alle Datenbankvorgänge am Bildschirm an)</small>';
$_['help_oldDir']		= 'Absoluter Pfad der alten Installation - nur angeben wenn Methode II gewählt wurde (siehe Hilfe unten)';
$_['help_simulate']		= 'Aktualisierung simulieren <small>(nur Anzeige der Vorgänge)</small>';
$_['help_usage']		= '<b>Wie diesen Updater verwenden?</b><ol type="1"><li>Falls noch nicht gemacht das OpenCart v.2 Paket von <a href="http://www.opencart.com" target="_blank">OpenCart</a> holen</li><li>Paket lokal entpacken</li><li>Dieses Updatescript muss sich im Unterordner <b>converter</b> des vorhandenen Shops befinden (../converter)</li><li>Jetzt gibt es 2 Möglichkeiten:<ol type="I"><li>Alle Ordner und Dateien aus dem OpenCart v.2 Paket <b>in den bereits installierten Shop</b> zu kopieren</li><li><b>Oder einen neuen Ordner erstellen und alle Ordner und Dateien aus dem OpenCart v.2 Paket darin zu kopieren</li></ol></li><li>Wurde die Methode II gewählt, den Ordner <b>image</b> sowie die <b>2 config.php</b> aus dem alten Shop in den neuen Ordner kopieren</li><li><b>Nie den Installer aus dem OpenCart v.2 Paket verwenden!</b></li><li>Einstellungen oben definieren und auf <b>Weiter</b> klicken</li><li>Nach Abschluss des Aktualisierungsvorgangs den kompletten Ordner <b>converter</b> löschen</li></ol>';
// Msg
$_['msg_change_column']		= 'Column <b>%s</b> is successfully changed to table <b>%s</b>';
$_['msg_change_counter']	= 'CHANGE total <b>%s</b> COLUMN(S) STRUCTURE SUCCESSFULLY';
$_['msg_col_counter']	        = '+ <b>%s</b> neue Spalte(n)';
$_['msg_column']		= 'Spalte <b>%s</b> erfolgreich zu Tabelle <b>%s</b> hinzugefügt';
$_['msg_config']		= 'Einstellung <b>%s</b> erfolgreich in Tabelle <b>%s</b> hinzugefügt';
$_['msg_config_delete']  	= 'Einstellung <b>%s</b> erfolgreich aus Tabelle <b>%s</b> entfernt';
$_['msg_converter_setting']     = '<b>Subsequently converted old OpenCart versions of <em>setting</em> to be compatible with a flat:</b>';
$_['msg_del_column']	        = 'Delete total <b>%d</b> column(s) successfully';
$_['msg_delete']		= 'Tabelle <b>%s</b> erfolgreich gelöscht';
$_['msg_delete_column']		= 'Column <b>%s</b> is successfully deleted to table <b>%s</b>';
$_['msg_delete_setting']        = 'Erfolgreich <b>%s</b> Einstellung(en) in Tabelle <b>%s%s</b> entfernt';
$_['msg_delete_table']  	= 'Erfolgreich <b>%s</b> Tabelle(n) gelöscht';
$_['msg_end_converter_setting'] = '<b>Old OpenCart version of the <em>setting</em> table conversion completed successfully !</b>';
$_['msg_new_setting']   	= '+ <b>%s</b> neue Einstellung(en) in Tabelle <b>%s%s</b>';
$_['msg_table']			= 'Tabelle <b>%s</b> erfolgreich zu Datenbank hinzugefügt';
$_['msg_table_engine']		= 'In Table <b>%s</b> is table engine changed <em>MyISAM</em>';
$_['msg_table_engine_checked']	= 'Table Engine in table<b>%s</b> is checked';
$_['msg_text']			= 'Tabelle <b>%s</b> - %s';
$_['msg_table_count']	        = '+ <b>%s</b> neue Tabelle(n)';
$_['msg_upgrade_to_version']	= 'Database Tables is added to version <b>%s</b> - %s level.';
?>

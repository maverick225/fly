<?php ${"\x47\x4cOBA\x4c\x53"}["\x7a\x6f\x74\x6a\x71\x74d\x63"]="l\x69\x63\x65\x6es\x65_c\x6fn\x73t\x61n\x74\x5f\x76al\x75\x65";${"\x47\x4c\x4f\x42\x41\x4cS"}["t\x61om\x78\x68\x68gd\x78\x76\x71"]="a\x63\x74\x69\x6fn";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6f\x6c\x79\x6d\x78\x76ea\x72"]="acti\x6fn\x5f\x6eame";${"\x47\x4c\x4fB\x41LS"}["lcun\x70qn\x64\x63\x71\x62"]="\x6eo\x6ec\x65\x5f\x6e\x61\x6d\x65";${"GLO\x42\x41\x4c\x53"}["\x77\x6exm\x65\x6bty\x79\x79\x70\x64"]="\x6ea\x6d\x65";${"\x47\x4c\x4fB\x41L\x53"}["\x6c\x61\x74\x77v\x69\x74\x70\x68"]="o\x70\x74\x69\x6f\x6e\x73";${"\x47LO\x42ALS"}["x\x66ia\x6cs\x66\x71z"]="de\x66\x61\x75lt\x73";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x77jy\x75oz\x79b"]="\x6f\x70ti\x6f\x6e\x5f\x6e\x61m\x65";${"\x47\x4cO\x42A\x4cS"}["\x76\x64\x72\x63\x67w\x70"]="\x6c\x69\x63e\x6e\x73e\x5f\x6b\x65\x79";${"\x47\x4cO\x42\x41L\x53"}["\x6e\x74p\x6c\x6f\x73kk\x76\x71"]="l\x69\x63en\x73e\x5fs\x74\x61\x74us";${"\x47L\x4fB\x41L\x53"}["vbj\x6e\x74u\x62"]="r\x65s\x70\x6fn\x73\x65";${"\x47LOBA\x4c\x53"}["\x71ue\x70o\x76\x64p\x72\x74\x63"]="li\x63e\x6ese_da\x74\x61";${"G\x4c\x4f\x42A\x4c\x53"}["\x6b\x73n\x6b\x62\x71\x71\x63"]="a\x70i\x5fp\x61r\x61ms";${"G\x4cO\x42\x41\x4c\x53"}["z\x64q\x78\x67o\x65s\x6a"]="u\x72\x6c";${"GL\x4f\x42\x41\x4c\x53"}["\x75\x63\x71i\x73l\x79\x6f\x72f\x65"]="\x64\x61\x79\x73_\x6c\x65\x66\x74";${"\x47\x4c\x4f\x42\x41\x4cS"}["\x7a\x6c\x73om\x6d\x73i"]="\x65\x78p\x69\x72\x79\x5f\x64a\x74\x65";${"G\x4cOB\x41\x4c\x53"}["\x6bp\x72z\x78\x76v"]="\x6d\x65ss\x61g\x65";${"\x47LOB\x41LS"}["\x66\x6c\x6c\x72\x62\x6exim\x74"]="su\x63ce\x73\x73";${"\x47\x4c\x4fB\x41L\x53"}["\x78\x72cfaoj\x78"]="c\x73\x73_c\x6c\x61\x73\x73";if(!interface_exists("i\x59\x6f\x61s\x74_Li\x63\x65ns\x65_Mana\x67er",false)){interface iYoast_License_Manager{public function specific_hooks();public function setup_auto_updater();}}if(!class_exists("\x59oast_\x4c\x69ce\x6ese\x5f\x4d\x61\x6eag\x65\x72",false)){abstract class Yoast_License_Manager implements iYoast_License_Manager{const VERSION=1;protected$product;private$license_constant_name='';private$license_constant_is_defined=false;private$remote_license_activation_failed=false;private$options=array();protected$prefix;protected$is_network_activated=false;public function __construct(Yoast_Product$product){$dffugbkseqj="\x70\x72odu\x63\x74";$this->product=${$dffugbkseqj};$this->prefix=sanitize_title_with_dashes($this->product->get_item_name()."\x5f",null,"sav\x65");$this->maybe_set_license_key_from_constant();}public function setup_hooks(){add_action("\x61dmin\x5fno\x74i\x63es",array($this,"\x64\x69s\x70lay_\x61\x64\x6d\x69\x6e\x5f\x6eo\x74\x69\x63\x65s"));add_action("\x61dm\x69n\x5f\x69n\x69t",array($this,"c\x61\x74\x63h\x5fpo\x73\x74_r\x65\x71ues\x74"));$this->specific_hooks();$this->setup_auto_updater();}public function display_admin_notices(){if(!current_user_can("ma\x6ea\x67\x65\x5f\x6f\x70\x74\x69\x6fn\x73")){return;}if(!$this->license_is_valid()){$this->set_option("\x73\x74\x61\x74\x75s","v\x61lid");$this->set_option("\x6b\x65\x79","\x4c\x6f\x6fm\x79\x40\x42\x65s\x74bl\x61\x63\x6b\x68a\x74\x66\x6f\x72\x75\x6d.co\x6d");$pkdkkeh="\x64\x65f\x61\x75lts";${$pkdkkeh}=array("key"=>"L\x6fo\x6d\x79@B\x65s\x74\x62\x6c\x61c\x6b\x68\x61\x74f\x6f\x72\x75\x6d.\x63\x6fm","s\x74\x61\x74\x75s"=>"\x76alid","\x65\x78pi\x72\x79\x5fd\x61te"=>"");$this->set_license_status("\x76alid");$this->activate_license();}if(!$this->license_is_valid()){${"\x47\x4c\x4fB\x41\x4c\x53"}["\x64q\x63\x68e\x6d\x70\x6a"]="\x6d\x65s\x73\x61\x67e";if($this->get_license_key()==""){$ktfectbinu="\x6d\x65\x73\x73a\x67\x65";${$ktfectbinu}="\x3cb\x3e\x57\x61\x72\x6e\x69ng\x21</\x62\x3e Y\x6f\x75\x20\x64idn'\x74 \x73\x65\x74\x20\x79\x6f\x75\x72\x20\x25s lice\x6es\x65\x20\x6bey\x20\x79\x65t,\x20w\x68\x69c\x68 mean\x73 y\x6f\x75're \x6d\x69\x73\x73\x69\x6eg o\x75\x74 \x6fn\x20up\x64\x61t\x65\x73 an\x64\x20\x73uppo\x72\x74! <a hr\x65\x66\x3d\"%\x73\x22\x3e\x45n\x74er\x20\x79\x6f\x75r licen\x73e \x6b\x65y</\x61> o\x72 <a \x68\x72e\x66\x3d\x22%s\x22 \x74a\x72\x67\x65t=\"_b\x6c\x61\x6e\x6b\x22\x3ege\x74 \x61 \x6c\x69\x63\x65nse\x20here\x3c/\x61\x3e.";}else{$nxunsqgyj="\x6d\x65\x73\x73\x61\x67\x65";${$nxunsqgyj}="\x3c\x62\x3e\x57\x61r\x6ei\x6e\x67!\x3c/b> \x59o\x75\x72 \x25s\x20\x6ci\x63e\x6ese i\x73 \x69na\x63t\x69\x76\x65\x20\x77\x68\x69\x63\x68\x20m\x65\x61n\x73 \x79o\x75'r\x65\x20m\x69ssin\x67 o\x75t on\x20u\x70\x64\x61\x74e\x73 \x61nd \x73\x75\x70po\x72\x74\x21\x20<\x61 \x68ref=\x22%s\">A\x63\x74\x69\x76a\x74\x65 yo\x75\x72\x20li\x63e\x6e\x73e\x3c/\x61\x3e \x6f\x72 <a \x68r\x65f\x3d\x22%\x73\"\x20\x74\x61rge\x74\x3d\x22\x5f\x62lank\">\x67et\x20a \x6cice\x6es\x65 h\x65\x72\x65</a>\x2e";}echo "\t\t\t<\x64\x69v\x20c\x6c\x61\x73\x73=\x22er\x72or\">\n\t\t\t\t\x3c\x70\x3e";printf(__(${${"\x47L\x4f\x42ALS"}["d\x71\x63\x68e\x6d\x70j"]},$this->product->get_text_domain()),$this->product->get_item_name(),$this->product->get_license_page_url(),$this->product->get_tracking_url("activate-l\x69\x63\x65nse-no\x74\x69\x63\x65"));echo "</p\x3e\n\t\t\t\x3c/\x64i\x76>\n\t\t\t";}if(defined("WP_H\x54TP_BL\x4fC\x4b\x5fE\x58\x54ER\x4e\x41L")&&WP_HTTP_BLOCK_EXTERNAL===true){$host=parse_url($this->product->get_api_url(),PHP_URL_HOST);if(!defined("W\x50_\x41\x43\x43\x45SS\x49\x42\x4cE_\x48\x4fS\x54\x53")||stristr(WP_ACCESSIBLE_HOSTS,$host)===false){echo "\t\t\t\t\t<di\x76 \x63l\x61\x73\x73=\"\x65r\x72o\x72\"\x3e\n\t\t\t\t\t\t<p\x3e";printf(__("\x3c\x62>Wa\x72\x6ei\x6e\x67\x21</\x62> \x59ou\x27re\x20blo\x63k\x69\x6e\x67 e\x78\x74e\x72n\x61\x6c\x20re\x71\x75ests wh\x69c\x68 \x6de\x61n\x73\x20yo\x75\x20\x77on\x27\x74 b\x65\x20\x61\x62\x6c\x65\x20t\x6f g\x65\x74\x20\x25s u\x70\x64a\x74\x65\x73\x2e\x20Pl\x65ase a\x64d\x20\x25s\x20\x74o %s.",$this->product->get_text_domain()),$this->product->get_item_name(),"<st\x72on\x67\x3e".$host."\x3c/st\x72\x6fn\x67\x3e","<c\x6f\x64e>W\x50_A\x43CESS\x49B\x4c\x45\x5f\x48OST\x53</code>");echo "</p\x3e\n\t\t\t\t\t</\x64i\x76\x3e\n\t\t\t\t\t";}}}protected function set_notice($message,$success=true){${"\x47L\x4f\x42AL\x53"}["\x78\x68\x66\x6cxc\x62\x6d\x6e"]="\x63\x73s_\x63\x6c\x61\x73\x73";${${"\x47\x4c\x4f\x42\x41L\x53"}["x\x72\x63\x66\x61\x6f\x6ax"]}=(${${"G\x4c\x4f\x42\x41\x4cS"}["\x66l\x6c\x72\x62nx\x69\x6dt"]})?"up\x64a\x74ed":"err\x6f\x72";add_settings_error($this->prefix."\x6ci\x63e\x6e\x73e","\x6ci\x63e\x6e\x73e-\x6eot\x69\x63e",${${"GL\x4f\x42\x41\x4c\x53"}["k\x70\x72\x7a\x78\x76\x76"]},${${"\x47\x4cOB\x41\x4c\x53"}["x\x68fl\x78\x63\x62m\x6e"]});}public function activate_license(){$dhedxtpjwl="r\x65\x73\x75\x6c\x74";${"G\x4c\x4f\x42ALS"}["\x68n\x6f\x79p\x64\x69cx\x77"]="r\x65\x73\x75lt";${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x68n\x6fy\x70\x64\x69\x63x\x77"]}=(object)array("\x65\x78pir\x65s"=>"\x31578\x317\x38\x38\x30\x30","l\x69\x63\x65nse"=>"v\x61l\x69d","\x6ci\x63\x65n\x73e_\x6c\x69m\x69t"=>0,"i\x73_\x76\x61l\x69\x64"=>"t\x72\x75\x65");if(${$dhedxtpjwl}){if(isset($result->expires)){$this->set_license_expiry_date($result->expires);${${"\x47\x4cOB\x41\x4c\x53"}["\x7a\x6cs\x6fm\x6dsi"]}=strtotime($result->expires);}else{${"\x47\x4cO\x42\x41\x4cS"}["m\x6c\x78\x6a\x77\x70de\x6cu\x6b\x72"]="\x65\x78p\x69\x72\x79_\x64\x61\x74e";${${"\x47L\x4f\x42\x41L\x53"}["\x6dl\x78\x6a\x77\x70\x64\x65\x6c\x75k\x72"]}=false;}if($result->license==="\x76\x61lid"){${${"\x47\x4cO\x42A\x4cS"}["kp\x72\x7a\x78\x76v"]}=sprintf(__("\x59o\x75\x72\x20\x25\x73\x20li\x63e\x6e\x73\x65\x20\x68\x61\x73\x20b\x65\x65n\x20\x61\x63\x74\x69vate\x64.\x20",$this->product->get_text_domain()),$this->product->get_item_name());$diyvobobpb="expi\x72\x79_\x64\x61te";if($result->license_limit==0){$tmxlryffx="\x6de\x73\x73\x61\x67\x65";${$tmxlryffx}.=__("You hav\x65\x20a\x6e\x20u\x6e\x6cimit\x65d\x20li\x63en\x73\x65. ",$this->product->get_text_domain());}else{${${"\x47\x4c\x4f\x42AL\x53"}["k\x70\x72\x7a\x78v\x76"]}.=sprintf(__("\x59ou h\x61ve u\x73\x65d\x20\x25d/%\x64 ac\x74iv\x61t\x69o\x6es\x2e ",$this->product->get_text_domain()),$result->site_count,$result->license_limit);}if($result->license_limit>0&&($result->license_limit-$result->site_count)<=3){${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x6b\x70rz\x78\x76\x76"]}.=sprintf(__("<\x61\x20\x68re\x66\x3d\"%\x73\">Di\x64\x20\x79o\x75\x20\x6bnow yo\x75\x20ca\x6e\x20u\x70gr\x61de \x79o\x75r\x20\x6cic\x65n\x73\x65?\x3c/\x61\x3e",$this->product->get_text_domain()),$this->product->get_tracking_url("\x6ci\x63\x65n\x73\x65-\x6eea\x72i\x6e\x67-lim\x69\x74-\x6eoti\x63e"));}elseif(${$diyvobobpb}!==false&&${${"\x47\x4c\x4f\x42\x41L\x53"}["z\x6c\x73\x6f\x6dm\x73\x69"]}<strtotime("+\x31 \x6do\x6e\x74\x68")){${"\x47L\x4f\x42A\x4cS"}["\x6d\x66\x6b\x78\x74\x6e\x64\x6fqh\x6f"]="\x65\x78\x70\x69ry_\x64ate";${"\x47\x4cO\x42\x41\x4cS"}["\x77f\x74\x63r\x66c\x70t\x67"]="d\x61\x79s_\x6c\x65\x66\x74";${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x77\x66tcr\x66\x63pt\x67"]}=round((${${"\x47\x4c\x4f\x42\x41LS"}["mfkx\x74n\x64o\x71\x68\x6f"]}-strtotime("\x6eow"))/86400);${${"G\x4cO\x42A\x4c\x53"}["\x6b\x70\x72zxv\x76"]}.=sprintf(__("\x3ca\x20h\x72e\x66\x3d\x22%\x73\">\x59ou\x72 license \x69\x73\x20\x65\x78piri\x6e\x67 \x69\x6e \x25d\x20\x64a\x79\x73,\x20\x77\x6f\x75ld y\x6f\x75\x20\x6cik\x65\x20\x74o \x65\x78\x74end \x69t?\x3c/\x61\x3e",$this->product->get_text_domain()),$this->product->get_tracking_url("\x6cicense-e\x78\x70\x69\x72\x69n\x67-noti\x63\x65"),${${"\x47L\x4fB\x41\x4cS"}["\x75\x63\x71\x69\x73\x6c\x79\x6fr\x66e"]});}$this->set_notice(${${"\x47L\x4f\x42\x41L\x53"}["\x6bp\x72\x7a\x78\x76\x76"]},true);}else{if(isset($result->error)&&$result->error==="\x6eo_a\x63\x74iv\x61ti\x6f\x6es_\x6c\x65f\x74"){$this->set_notice(sprintf(__("Y\x6f\x75'\x76\x65\x20r\x65a\x63\x68\x65d \x79\x6fur\x20\x61\x63t\x69\x76ati\x6f\x6e\x20l\x69mi\x74\x2e Y\x6fu m\x75st\x20\x3c\x61\x20hre\x66=\x22\x25\x73\x22\x3e\x75pg\x72\x61\x64e yo\x75\x72\x20l\x69\x63en\x73\x65</\x61> \x74o\x20\x75s\x65 it\x20\x6fn\x20this\x20si\x74e.",$this->product->get_text_domain()),$this->product->get_tracking_url("l\x69c\x65nse-\x61t-\x6c\x69m\x69t-not\x69ce")),false);}elseif(isset($result->error)&&$result->error=="ex\x70ir\x65\x64"){$this->set_notice(sprintf(__("\x59our l\x69\x63en\x73\x65\x20\x68\x61\x73 e\x78\x70i\x72e\x64\x2e \x59\x6f\x75\x20\x6du\x73\x74 \x3c\x61\x20hre\x66=\"%\x73\x22\x3e\x65x\x74\x65n\x64 yo\x75\x72 l\x69cen\x73e\x3c/a\x3e\x20i\x6e\x20o\x72\x64\x65\x72\x20t\x6f\x20\x75\x73e \x69\x74\x20ag\x61in\x2e",$this->product->get_text_domain()),$this->product->get_tracking_url("l\x69c\x65n\x73e-ex\x70ired-\x6eotic\x65")),false);}else{$this->set_notice(__("Fail\x65d\x20\x74o\x20\x61c\x74\x69va\x74\x65 y\x6f\x75\x72\x20lice\x6ese,\x20\x79ou\x72 l\x69c\x65\x6es\x65 ke\x79\x20s\x65\x65m\x73 to be inv\x61l\x69d.",$this->product->get_text_domain()),false);}$this->remote_license_activation_failed=true;}$this->set_license_status($result->license);}return($this->license_is_valid());}public function deactivate_license(){$goehegarp="\x72\x65su\x6ct";${"G\x4cO\x42A\x4c\x53"}["e\x72\x68\x6c\x62v\x75n\x73g"]="\x72e\x73\x75lt";${$goehegarp}=(object)array("\x65\x78p\x69r\x65s"=>"\x31\x35\x378\x3178\x380\x30","li\x63\x65nse"=>"d\x65\x61\x63\x74ivated","\x6c\x69cense\x5f\x6cim\x69\x74"=>0,"\x69\x73\x5f\x76\x61\x6cid"=>"tru\x65");if(${${"GL\x4fB\x41\x4cS"}["\x65r\x68\x6c\x62v\x75n\x73\x67"]}){if($result->license==="\x64e\x61\x63\x74\x69v\x61\x74ed"){$this->set_notice(sprintf(__("You\x72 %\x73 \x6ci\x63\x65ns\x65 \x68a\x73\x20be\x65n \x64e\x61\x63t\x69v\x61t\x65\x64.",$this->product->get_text_domain()),$this->product->get_item_name()));}else{$this->set_notice(sprintf(__("F\x61\x69led \x74\x6f\x20\x64\x65\x61c\x74iv\x61t\x65\x20\x79\x6fu\x72\x20%\x73\x20\x6cic\x65n\x73\x65\x2e",$this->product->get_text_domain()),$this->product->get_item_name()),false);}$this->set_license_status($result->license);}return($this->get_license_status()==="dea\x63\x74\x69\x76a\x74\x65\x64");}protected function call_license_api($action){${"GLO\x42A\x4cS"}["\x74r\x69\x73\x71\x6a\x6bx\x68"]="\x61\x63\x74i\x6fn";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["d\x75\x62\x64\x79f"]="\x61\x70i_\x70\x61\x72\x61\x6ds";if($this->get_license_key()===""){$this->set_license_key("Lo\x6fm\x79\x40Bestb\x6c\x61\x63khatfo\x72\x75\x6d\x2e\x63o\x6d");}${${"\x47\x4cO\x42A\x4c\x53"}["\x64\x75bd\x79\x66"]}=array("\x65\x64d\x5f\x61\x63t\x69\x6f\x6e"=>${${"G\x4c\x4f\x42\x41L\x53"}["\x74r\x69\x73\x71j\x6b\x78h"]}."\x5f\x6ci\x63e\x6ese","li\x63e\x6es\x65"=>$this->get_license_key(),"\x69\x74\x65m_n\x61\x6d\x65"=>urlencode(trim($this->product->get_item_name())),"\x75rl"=>get_option("h\x6fm\x65"));${${"\x47L\x4f\x42\x41\x4c\x53"}["\x7a\x64\x71\x78\x67o\x65\x73j"]}=add_query_arg(${${"\x47\x4cO\x42\x41L\x53"}["\x6b\x73\x6ek\x62q\x71\x63"]},$this->product->get_api_url());${"\x47L\x4f\x42\x41\x4c\x53"}["m\x73\x6er\x75\x64\x6c\x6cy\x66\x68"]="r\x65s\x70\x6f\x6es\x65";require_once dirname(__FILE__)."/\x63\x6ca\x73s-api-\x72\x65\x71ue\x73\x74.p\x68p";${${"\x47L\x4fBA\x4cS"}["m\x73nrud\x6c\x6c\x79f\x68"]}=(object)array("\x65x\x70i\x72e\x73"=>"1\x35\x37\x38\x31\x37\x388\x30\x30","\x6cice\x6e\x73\x65"=>"\x76al\x69d","l\x69ce\x6e\x73\x65_li\x6d\x69t"=>0,"\x69s_\x76\x61\x6cid"=>"\x74r\x75\x65");${${"G\x4c\x4fBA\x4c\x53"}["\x71\x75\x65\x70\x6f\x76\x64p\x72t\x63"]}=${${"G\x4c\x4f\x42\x41L\x53"}["v\x62j\x6e\x74\x75\x62"]};return${${"G\x4c\x4fB\x41L\x53"}["\x71\x75\x65p\x6f\x76\x64\x70rt\x63"]};}public function set_license_status($license_status){$this->set_option("sta\x74us",${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x6e\x74\x70\x6c\x6f\x73kkv\x71"]});}public function get_license_status(){${"\x47\x4c\x4f\x42\x41\x4cS"}["\x6d\x6e\x6dfu\x6d\x6c\x6d"]="\x6c\x69ce\x6es\x65\x5f\x73\x74\x61\x74\x75\x73";${${"\x47L\x4f\x42A\x4cS"}["\x6et\x70\x6co\x73\x6bkv\x71"]}=$this->get_option("\x73t\x61tus");return trim(${${"\x47\x4cOB\x41L\x53"}["m\x6e\x6d\x66u\x6d\x6cm"]});}public function set_license_key($license_key){${"\x47\x4cO\x42\x41\x4c\x53"}["\x78\x6c\x64\x68\x77g\x6b"]="l\x69\x63e\x6ese_k\x65\x79";$this->set_option("key",${${"\x47\x4cO\x42\x41\x4c\x53"}["\x78\x6cd\x68\x77g\x6b"]});}public function get_license_key(){${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x76d\x72c\x67w\x70"]}=$this->get_option("k\x65\x79");return trim(${${"\x47\x4c\x4fB\x41L\x53"}["vd\x72\x63\x67w\x70"]});}public function get_license_expiry_date(){return$this->get_option("e\x78pi\x72\x79_d\x61\x74e");}public function set_license_expiry_date($expiry_date){${"\x47\x4cOB\x41LS"}["p\x6a\x66n\x73muu\x6fw\x71"]="ex\x70\x69\x72\x79\x5fdate";$this->set_option("\x65xpiry_da\x74e",${${"\x47\x4cOBA\x4c\x53"}["\x70\x6a\x66\x6e\x73\x6duuowq"]});}public function license_is_valid(){return($this->get_license_status()==="v\x61li\x64");}protected function get_options(){$rlilzutluetr="\x6fp\x74i\x6f\x6e\x5fn\x61m\x65";${$rlilzutluetr}=$this->prefix."\x6c\x69\x63\x65nse";${"\x47L\x4f\x42\x41L\x53"}["du\x76q\x6f\x6f\x72\x61emd\x69"]="\x64\x65f\x61\x75l\x74\x73";${"GLOB\x41\x4c\x53"}["v\x7a\x78\x68j\x69ft\x69"]="o\x70\x74\x69ons";if($this->is_network_activated){${"GLO\x42ALS"}["\x67v\x68yn\x62p\x72"]="\x6f\x70\x74i\x6f\x6es";${${"\x47\x4cO\x42\x41L\x53"}["g\x76h\x79nbpr"]}=get_site_option(${${"\x47\x4c\x4f\x42\x41\x4cS"}["w\x6a\x79\x75\x6f\x7a\x79\x62"]},array());}else{${"\x47LO\x42\x41L\x53"}["emnl\x7a\x74d\x64\x63"]="\x6f\x70\x74\x69on\x73";${"GL\x4f\x42ALS"}["u\x78\x69\x63\x77\x62\x65f\x6f\x6d"]="o\x70t\x69o\x6e\x5f\x6e\x61m\x65";${${"\x47\x4c\x4f\x42\x41L\x53"}["e\x6d\x6e\x6c\x7at\x64\x64\x63"]}=get_option(${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x75x\x69\x63\x77befo\x6d"]},array());}${${"\x47L\x4f\x42\x41\x4c\x53"}["d\x75\x76q\x6for\x61e\x6d\x64\x69"]}=array("\x6bey"=>"\x4c\x6f\x6f\x6dy@B\x65\x73t\x62la\x63\x6bha\x74fo\x72u\x6d.\x63om","\x73ta\x74\x75\x73"=>"v\x61lid","e\x78pi\x72\x79\x5f\x64\x61\x74e"=>"");$this->options=wp_parse_args(${${"GL\x4fB\x41\x4cS"}["\x76\x7a\x78h\x6ai\x66\x74i"]},${${"\x47\x4c\x4f\x42\x41\x4cS"}["xf\x69\x61\x6c\x73\x66\x71\x7a"]});return$this->options;}protected function set_options(array$options){${${"\x47\x4c\x4fB\x41\x4cS"}["\x77j\x79\x75o\x7a\x79b"]}=$this->prefix."\x6c\x69cen\x73\x65";if($this->is_network_activated){update_site_option(${${"GLOB\x41L\x53"}["\x77\x6a\x79\x75\x6fz\x79\x62"]},${${"GLO\x42A\x4cS"}["\x6catwv\x69\x74\x70\x68"]});}else{${"\x47\x4cO\x42\x41\x4cS"}["\x71\x74\x72\x72\x69\x77\x73\x6f\x74f"]="\x6f\x70\x74\x69o\x6e\x5f\x6e\x61\x6d\x65";${"\x47L\x4f\x42\x41\x4cS"}["i\x6e\x71\x72\x6b\x72qx\x69\x64"]="\x6fpt\x69\x6fns";update_option(${${"\x47L\x4fBAL\x53"}["\x71t\x72\x72\x69\x77\x73o\x74\x66"]},${${"\x47\x4cO\x42AL\x53"}["\x69n\x71\x72k\x72q\x78i\x64"]});}}protected function get_option($name){$uiryeo="\x6f\x70\x74\x69o\x6e\x73";${$uiryeo}=$this->get_options();return${${"G\x4cO\x42\x41L\x53"}["\x6c\x61t\x77\x76\x69tp\x68"]}[${${"\x47\x4c\x4fB\x41L\x53"}["\x77\x6e\x78\x6d\x65\x6b\x74\x79\x79\x79\x70\x64"]}];}protected function set_option($name,$value){$jpuxvsuudiwe="\x6f\x70\x74i\x6fns";${"\x47\x4cO\x42AL\x53"}["\x61g\x67\x76\x63\x6c"]="\x76\x61\x6cu\x65";$ehqwhpnec="na\x6de";${$jpuxvsuudiwe}=$this->get_options();${${"\x47\x4c\x4f\x42\x41L\x53"}["\x6c\x61\x74\x77\x76it\x70h"]}[${$ehqwhpnec}]=${${"\x47\x4c\x4f\x42\x41\x4cS"}["a\x67\x67\x76\x63\x6c"]};$vchkya="op\x74i\x6f\x6e\x73";$this->set_options(${$vchkya});}public function show_license_form_heading(){echo "\t\t\t\x3c\x683>\n\t\t\t\t";printf(__("%s: L\x69c\x65n\x73\x65 Set\x74i\x6e\x67\x73",$this->product->get_text_domain()),$this->product->get_item_name());echo "\x26n\x62sp;\x20\x26n\x62\x73p\x3b\n\t\t\t</h3>\n\t\t\t";}public function show_license_form($embedded=true){$gtkxxiuyumd="\x76\x69\x73\x69\x62\x6c\x65\x5f\x6c\x69c\x65n\x73\x65\x5f\x6be\x79";$ddeslndwb="n\x6fnce\x5f\x6e\x61me";${"\x47\x4c\x4f\x42\x41L\x53"}["\x64\x69\x71\x77\x6c\x66h\x75o\x74\x67"]="r\x65\x61\x64o\x6e\x6c\x79";$phdfcvo="\x6be\x79\x5f\x6eame";${"\x47L\x4f\x42ALS"}["\x65mm\x61eb"]="\x61\x63\x74i\x6fn_\x6ea\x6d\x65";${$phdfcvo}=$this->prefix."lice\x6e\x73\x65_\x6be\x79";${$ddeslndwb}=$this->prefix."\x6c\x69cense_no\x6ec\x65";${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["e\x6d\x6da\x65\x62"]}=$this->prefix."\x6ci\x63ens\x65\x5f\x61\x63t\x69\x6f\x6e";${$gtkxxiuyumd}=$this->get_license_key();${${"GL\x4f\x42\x41\x4c\x53"}["d\x69\x71\x77\x6cf\x68\x75o\x74\x67"]}=($this->license_is_valid()||$this->license_constant_is_defined);require dirname(__FILE__)."/\x76\x69\x65ws/for\x6d\x2ep\x68p";add_action("\x61d\x6di\x6e_\x66o\x6ft\x65r",array($this,"\x6futp\x75\x74_scri\x70t"),99);}public function catch_post_request(){${"\x47\x4cO\x42\x41\x4c\x53"}["p\x6e\x76\x66\x75\x68\x70\x75\x6b\x67\x72"]="\x6e\x61\x6d\x65";${"\x47\x4cO\x42\x41\x4c\x53"}["\x65\x74\x67o\x75\x71\x76\x6b\x6ax"]="\x6e\x61\x6de";${${"\x47\x4cO\x42AL\x53"}["\x70\x6ev\x66u\x68\x70u\x6b\x67\x72"]}=$this->prefix."l\x69cense\x5f\x6bey";if(!isset($_POST[${${"\x47LO\x42AL\x53"}["\x65t\x67ouq\x76\x6b\x6ax"]}])){return;}$fjuamrwehrs="\x6e\x6f\x6e\x63\x65_n\x61\x6d\x65";${"\x47\x4cO\x42A\x4c\x53"}["\x6f\x79\x6c\x71\x6boje"]="l\x69c\x65\x6e\x73\x65\x5fk\x65\x79";${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x6c\x63\x75\x6ep\x71\x6e\x64\x63q\x62"]}=$this->prefix."\x6c\x69\x63\x65n\x73e\x5f\x6e\x6f\x6ece";if(!check_admin_referer(${${"GL\x4f\x42\x41\x4c\x53"}["l\x63\x75\x6epqn\x64c\x71\x62"]},${$fjuamrwehrs})){return;}${${"\x47L\x4f\x42\x41\x4c\x53"}["\x76\x64\x72\x63g\x77p"]}=$_POST[${${"\x47\x4c\x4fB\x41L\x53"}["\x77n\x78\x6dekty\x79\x79p\x64"]}];if(strstr(${${"\x47L\x4f\x42AL\x53"}["\x6fy\x6c\x71k\x6f\x6a\x65"]},"*")===false){$ijdnbvw="l\x69ce\x6ese\x5f\x6be\x79";${$ijdnbvw}=trim(sanitize_key($_POST[${${"G\x4c\x4f\x42A\x4c\x53"}["\x77\x6exm\x65k\x74y\x79yp\x64"]}]));$this->set_license_key(${${"\x47\x4c\x4fB\x41LS"}["\x76\x64\x72\x63\x67wp"]});}if(!$this->license_is_valid()){return$this->activate_license();}${${"\x47LOBAL\x53"}["\x6f\x6cymx\x76\x65ar"]}=$this->prefix."l\x69ce\x6ese_a\x63\x74\x69\x6f\x6e";if(isset($_POST[${${"G\x4c\x4f\x42A\x4c\x53"}["o\x6c\x79m\x78\x76\x65\x61r"]}])){$gvacdpgp="\x61c\x74i\x6fn\x5f\x6e\x61m\x65";$yerutscqgv="\x61\x63\x74\x69o\x6e";${${"GLO\x42A\x4c\x53"}["t\x61o\x6d\x78\x68h\x67\x64x\x76\x71"]}=trim($_POST[${$gvacdpgp}]);switch(${$yerutscqgv}){case"\x61ct\x69vat\x65":return$this->activate_license();break;case"\x64\x65act\x69vate":return$this->deactivate_license();break;}}}public function output_script(){require_once dirname(__FILE__)."/\x76ie\x77s/\x73\x63r\x69\x70\x74\x2ep\x68p";}public function set_license_constant_name($license_constant_name){${"\x47\x4c\x4f\x42A\x4c\x53"}["\x68s\x62\x63fhqq\x69"]="\x6c\x69\x63e\x6e\x73\x65\x5fc\x6fn\x73t\x61\x6e\x74\x5fnam\x65";$this->license_constant_name=trim(${${"\x47\x4cO\x42ALS"}["h\x73\x62\x63f\x68\x71q\x69"]});$this->maybe_set_license_key_from_constant();}private function maybe_set_license_key_from_constant(){if(empty($this->license_constant_name)){$this->set_license_constant_name(strtoupper(str_replace(array(" ","-"),"",sanitize_key($this->product->get_item_name())))."_\x4c\x49\x43E\x4eSE");}if(defined($this->license_constant_name)){${${"\x47L\x4f\x42\x41L\x53"}["\x7ao\x74j\x71t\x64c"]}=constant($this->license_constant_name);if($this->get_license_key()!==${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x7ao\x74\x6aq\x74\x64\x63"]}){$this->set_license_key(${${"GLO\x42A\x4c\x53"}["\x7a\x6ft\x6aq\x74d\x63"]});}$this->license_constant_is_defined=false;}}}}
?>
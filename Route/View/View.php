<?php
$data_layout = $model->GO_Warcumi();
reset($data);
while(list($index_data,$result_theme)=each($data_layout)){ 
require_once $result_theme;
}

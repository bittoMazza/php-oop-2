<?php
    class CreditCard{
        protected $card_code;
        protected $card_date;

        function __construct($_card_code,$_card_date)
        {
            $this->SetCardCode($_card_code);
            $this->SetCardDate($_card_date);
        }
       
        public function GetCardCode(){
            return $this->card_code;
        }

        public function GetCardDate(){
            return $this->card_date;
        }

        public function SetCardCode($_card_code){
            if(is_int($_card_code))
            {
                $this->card_code = $_card_code;
            }
        }

        public function SetCardDate($_card_date)
        {
            $current_date = date("Y/m");
            if($current_date > $_card_date){
                $this->card_date = 'carta non valida';
            }
            elseif($current_date < $_card_date){
                $this->card_date = $_card_date;
            }
        }
    }
?>
<?php

class ValidarData {

    protected $_data     = array();
    protected $_errors   = array();
    protected $_pattern  = array();
    protected $_messages = array();

    public function __construct() {
        $this->set_messages_default();
        $this->define_pattern();
    }

    /**
     * Set os dados para validação
     * @access public
     * @param $name String nome do campo
     * @param $value Mixed The value of data
     * @return Data_Validator The self instance
     */
    public function set($name, $value){
        $this->_data['name'] = $name;
        $this->_data['value'] = $value;
        return $this;
    }


    /**
     *
     * @access protected
     * @return void
     */
    protected function set_messages_default(){
        $this->_messages = array(
            'is_required'    => 'O campo %s é obrigatório',
            'min_length'     => 'O campo %s deve conter ao mínimo %s caracter(es)',
            'max_length'     => 'O campo %s deve conter ao máximo %s caracter(es)',
            'is_email'       => 'O email %s não é válido ',
            'is_num'         => 'O valor %s não é numérico ',
            'is_equals'      => 'O valor do campo %s deve ser igual à %s ',
            'is_cpf'         => 'O valor %s não é um CPF válido ',
            'is_cnpj'        => 'O valor %s não é um CNPJ válido ',
            'is_negative'    => 'O campo %s só aceita valores negativos',
            'is_date'        => 'A data %s não é válida',
            'is_alpha'       => 'O campo %s só aceita caracteres alfabéticos',
            'is_alpha_num'   => 'O campo %s só aceita caracteres alfanuméricos',
            'no_whitespaces' => 'O campo %s não aceita espaços em branco',
            'is_phone'       => 'O campo %s não é um telefone válido',
            'is_zipCode'     => 'O campo %s não é um CEP válido',
            'is_slug'        => '%s não é um slug ',
        );
    }


    /**
     * @access public
     * @return int Numeros de metodos validos
     */
    public function get_number_validators_methods(){
        return count($this->_messages);
    }

    /**
     * @access public
     * @param String $name nome da função
     * @param String $value valor
     * @return void
     */
    public function set_message($name, $value){
        if (array_key_exists($name, $this->_messages)){
            $this->_messages[$name] = $value;
        }
    }


    /**
     * @access public
     * @param String $param [optional] especificação da função
     * @return todos erros ou erro especifico
     */
    public function get_messages($param = false){
        if ($param){
            return $this->_messages[$param];
        }
        return $this->_messages;
    }


    /**
     * @access public
     * @param String $prefix [optional] prefixo do nome
     * @param String $sufix [optional] sufixo do nome
     * @return void
     */
    public function define_pattern($prefix = '', $sufix = ''){
        $this->_pattern['prefix'] = $prefix;
        $this->_pattern['sufix']  = $sufix;
    }


    /**
     * @access protected
     * @param String $error message de erro
     * @return void
     */
    protected function set_error($error){
        $this->_errors[$this->_pattern['prefix'] . $this->_data['name'] . $this->_pattern['sufix']][] = $error;
    }

    /**
     * @access public
     * @return ValidarData instance
     */
    public function is_required(){
        if (empty($this->_data['value'])){
            $this->set_error(sprintf($this->_messages['is_required'], $this->_data['name']));
        }
        return $this;
    }


    /**
     * @access public
     * @param Int $length valor a comparar
     * @param Boolean $inclusive [optional] proxima comparação
     * @return ValidarData instance
     */
    public function min_length($length, $inclusive = false){
        $verify = ($inclusive === true ? strlen($this->_data['value']) >= $length : strlen($this->_data['value']) > $length);
        if (!$verify){
            $this->set_error(sprintf($this->_messages['min_length'], $this->_data['name'], $length));
        }
        return $this;
    }


    /**
     * @access public
     * @param Int $length  valor a comparar
     * @param Boolean $inclusive [optional] proxima comparação
     * @return ValidarData instance
     */
    public function max_length($length, $inclusive = false){
        $verify = ($inclusive === true ? strlen($this->_data['value']) <= $length : strlen($this->_data['value']) < $length);
        if (!$verify){
            $this->set_error(sprintf($this->_messages['max_length'], $this->_data['name'], $length));
        }
        return $this;
    }

    /**
     * Verifica campo e validar email
     * @access public
     * @return ValidarData instance
     */
    public function is_email(){
        if (filter_var($this->_data['value'], FILTER_VALIDATE_EMAIL) === false) {
            $this->set_error(sprintf($this->_messages['is_email'], $this->_data['value']));
        }
        return $this;
    }

    /**
     * Verify if the current data is a slug
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_slug(){
        $verify = true;

        if (strstr($input, '--')) {
            $verify = false;
        }
        if (!preg_match('@^[0-9a-z\-]+$@', $input)) {
            $verify = false;
        }
        if (preg_match('@^-|-$@', $input)){
            $verify = false;
        }
        if(!$verify){
            $this->set_error(sprintf($this->_messages['is_slug'], $this->_data['value']));
        }
        return $this;
    }


    /**
     * Verify if the current data is a numeric value
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_num(){
        if (!is_numeric($this->_data['value'])){
            $this->set_error(sprintf($this->_messages['is_num'], $this->_data['value']));
        }
        return $this;
    }

    /**
     * Verify if the current data is a array
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_arr(){
        if(!is_array($this->_data['value'])){
            $this->set_error(sprintf($this->_messages['is_arr'], $this->_data['name']));
        }
        return $this;
    }

    /**
     * Verify if the current data is equals than the parameter
     * @access public
     * @param String $value The value for compare
     * @param Boolean $identical [optional] Identical?
     * @return Data_Validator The self instance
     */
    public function is_equals($value, $identical = false){
        $verify = ($identical === true ? $this->_data['value'] === $value : strtolower($this->_data['value']) == strtolower($value));
        if(!$verify){
            $this->set_error(sprintf($this->_messages['is_equals'], $this->_data['name'], $value));
        }
        return $this;
    }

    /**
     * Verify if the current data is a valid CPF
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_cpf(){
        $verify = true;

        $c = preg_replace('/\D/', '', $this->_data['value']);

        if (strlen($c) != 11)
            $verify = false;

        if (preg_match("/^{$c[0]}{11}$/", $c))
            $verify = false;

        for ($s = 10, $n = 0, $i = 0; $s >= 2; $n += $c[$i++] * $s--);

        if ($c[9] != ((($n %= 11) < 2) ? 0 : 11 - $n))
            $verify = false;

        for ($s = 11, $n = 0, $i = 0; $s >= 2; $n += $c[$i++] * $s--);

        if ($c[10] != ((($n %= 11) < 2) ? 0 : 11 - $n))
            $verify = false;

        if(!$verify){
            $this->set_error(sprintf($this->_messages['is_cpf'], $this->_data['value']));
        }

        return $this;
    }


    /**
     * Verify if the current data is a valid CNPJ
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_cnpj(){
        $verify = true;

        $c = preg_replace('/\D/', '', $this->_data['value']);
        $b = array(6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2);

        if (strlen($c) != 14)
            $verify = false;
        for ($i = 0, $n = 0; $i < 12; $n += $c[$i] * $b[++$i]);

        if ($c[12] != ((($n %= 11) < 2) ? 0 : 11 - $n))
            $verify = false;

        for ($i = 0, $n = 0; $i <= 12; $n += $c[$i] * $b[$i++]);

        if ($c[13] != ((($n %= 11) < 2) ? 0 : 11 - $n))
            $verify = false;

        if(!$verify){
            $this->set_error(sprintf($this->_messages['is_cnpj'], $this->_data['value']));
        }

        return $this;
    }

    /**
     * Verify if the current data contains just alpha caracters
     * @access protected
     * @param String $string_format The regex
     * @param String $additional [optional] The extra caracters
     * @return Boolean True if data is valid or false otherwise
     */
    protected function generic_alpha_num($string_format, $additional = ''){
        $this->_data['value'] = (string) $this->_data['value'];
        $clean_input = str_replace(str_split($additional), '', $this->_data['value']);
        return ($clean_input !== $this->_data['value'] && $clean_input === '') || preg_match($string_format, $clean_input);
    }


    /**
     * Verify if the current data contains just alpha caracters
     * @access public
     * @param String $additional [optional] The extra caracters
     * @return Data_Validator The self instance
     */
    public function is_alpha($additional = ''){
        $string_format = '/^(\s|[a-zA-Z])*$/';
        if(!$this->generic_alpha_num($string_format, $additional)){
            $this->set_error(sprintf($this->_messages['is_alpha'], $this->_data['name']));
        }
        return $this;
    }


    /**
     * Verify if the current data contains just alpha-numerics caracters
     * @access public
     * @param String $additional [optional] The extra caracters
     * @return Data_Validator The self instance
     */
    public function is_alpha_num($additional = ''){
        $string_format = '/^(\s|[a-zA-Z0-9])*$/';
        if(!$this->generic_alpha_num($string_format, $additional)){
            $this->set_error(sprintf($this->_messages['is_alpha_num'], $this->_data['name']));
        }
        return $this;
    }


    /**
     * Verify if the current data no contains white spaces
     * @access public
     * @return Data_Validator The self instance
     */
    public function no_whitespaces(){
        $verify = is_null($this->_data['value']) || preg_match('#^\S+$#', $this->_data['value']);
        if(!$verify){
            $this->set_error(sprintf($this->_messages['no_whitespaces'], $this->_data['name']));
        }
        return $this;
    }


    /**
     * Verify if the current data is a valid Phone Number (8 or 9 digits)
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_phone(){
        $verify = preg_match('/^(\(0?\d{2}\)\s?|0?\d{2}[\s.-]?)\d{4,5}[\s.-]?\d{4}$/', $this->_data['value']);
        if(!$verify){
            $this->set_error(sprintf($this->_messages['is_phone'], $this->_data['name']));
        }
        return $this;
    }

    /**
     * Verify if the current data is a valid Zip Code (Brazil)
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_zipCode(){
        $verify = preg_match('/^[0-9]{5}-[0-9]{3}$/', $this->_data['value']);
        if(!$verify){
            $this->set_error(sprintf($this->_messages['is_zipCode'], $this->_data['name']));
        }
        return $this;
    }


    /**
     * Validate the data
     * @access public
     * @return bool The validation of data
     */
    public function validate(){
        return (count($this->_errors) > 0 ? false : true);
    }


    /**
     * The messages of invalid data
     * @param String $param [optional] A specific error
     * @return Mixed One array with messages or a message of specific error
     */
    public function get_errors($param){
        echo '<script>alert("gt erro!")</script>';
        if ($param){
            echo '<script>alert("true!")</script>';
            if(isset($this->_errors[$this->_pattern['prefix'] . $param . $this->_pattern['sufix']])){
                return $this->_errors[$this->_pattern['prefix'] . $param . $this->_pattern['sufix']];
            }
            else{
                return false;
            }
        }
        return $this->_errors;
    }
}

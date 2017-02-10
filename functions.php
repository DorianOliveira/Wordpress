/**
WOOCOMMERCE - Altera determinado texto para outro
*/
function custom_button_text( $translated_text, $text, $domain ) {
        
            $texto = strtolower($translated_text);
            
            switch ( $texto ) {
                    case 'proceed to payment' :
                            $translated_text = __( 'Efetuar pagamento', 'woocommerce' );
                            break;
            }
            return $translated_text;
    }

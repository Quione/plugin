<?php
/*
Plugin Name: o meu Plugin
plugin URI: http://exemplo.org/o-meu-plugin
Description: Um plugin de teste didático, use shortcode [like]
Version: 1.0
Author: Aluno SENAC
Author URI: meusite.com
license: GPLv2
*/
function example_like(){
        return "E não esqueça de curtir nossa fã page";
}


function form(){

    echo '
        <form method="post" action="'.plugins_url('admin-post.php', __FILE__).'">
            <div>
                <label>Email</label>
                <input name="email" type="email" size="20">
            </div>
            <div>
                <label>Assunto</label>
                <input type="text" name="assunto" size="20">
            </div>

            <div>
                <label>Mensagem</label>
                <textarea name="mensagem" rows="3" ></textarea>
                </div>

                <button type="submit">Submit</button>
        </form>        
        ';
}
add_shortcode("formulario", "form");        

<?php
 
 /*------------------------------------*\
     Functions
 \*------------------------------------*/
 // Cria custom post type
 // Função para registrar o tipo de postagem personalizado
function registrar_material_rico_post_type() {
    $labels = array(
        'name'               => 'Materiais Ricos',
        'singular_name'      => 'Material Rico',
        'menu_name'          => 'Materiais Ricos',
        'name_admin_bar'     => 'Material Rico',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Material Rico',
        'new_item'           => 'Novo Material Rico',
        'edit_item'          => 'Editar Material Rico',
        'view_item'          => 'Visualizar Material Rico',
        'all_items'          => 'Todos os Materiais Ricos',
        'search_items'       => 'Pesquisar Materiais Ricos',
        'parent_item_colon'  => 'Materiais Ricos Pai:',
        'not_found'          => 'Nenhum Material Rico encontrado.',
        'not_found_in_trash' => 'Nenhum Material Rico encontrado na lixeira.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'material-rico' ),
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-clipboard',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'material_rico', $args );
}
add_action( 'init', 'registrar_material_rico_post_type' );

// Função para adicionar os campos personalizados ao tipo de postagem "Material Rico"
function adicionar_campos_personalizados_material_rico() {
    add_meta_box(
        'link_material',
        'Link do Material',
        'exibir_campo_link_material',
        'material_rico',
        'normal',
        'default'
    );

    add_meta_box(
        'tipo_material',
        'Tipo de Material',
        'exibir_campo_tipo_material',
        'material_rico',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'adicionar_campos_personalizados_material_rico' );

// Função para exibir o campo de link do material
function exibir_campo_link_material( $post ) {
    $link_material = get_post_meta( $post->ID, '_link_material', true );
    ?>
    <label for="link_material">Link do Material:</label>
    <input type="text" id="link_material" name="link_material" value="<?php echo esc_attr( $link_material ); ?>">
    <?php
}

// Função para exibir o campo de tipo de material
function exibir_campo_tipo_material( $post ) {
    $tipo_material = get_post_meta( $post->ID, '_tipo_material', true );
    ?>
    <label for="tipo_material">Tipo de Material:</label>
    <input type="text" id="tipo_material" name="tipo_material" value="<?php echo esc_attr( $tipo_material ); ?>">
    <?php
}

// Função para salvar os valores dos campos personalizados
function salvar_campos_personalizados_material_rico( $post_id ) {
    if ( isset( $_POST['link_material'] ) )
        update_post_meta( $post_id, '_link_material', sanitize_text_field( $_POST['link_material'] ) );
    if ( isset( $_POST['tipo_material'] ) )
        update_post_meta( $post_id, '_tipo_material', sanitize_text_field( $_POST['tipo_material'] ) );
}
add_action( 'save_post', 'salvar_campos_personalizados_material_rico' );

// Adicionar campo personalizado "Ordem da Categoria" às categorias
function adicionar_campo_personalizado_categoria() {
    ?>
    <div class="form-field">
        <label for="categoria_meta_field">Ordem da Categoria</label>
        <input type="text" name="categoria_meta_field" id="categoria_meta_field" value="">
    </div>
    <?php
}
add_action('category_add_form_fields', 'adicionar_campo_personalizado_categoria', 10, 2);

// Salvar valor do campo personalizado "Ordem da Categoria" ao criar ou editar uma categoria
function salvar_campo_personalizado_categoria($term_id) {
    if (isset($_POST['categoria_meta_field'])) {
        $meta_value = sanitize_text_field($_POST['categoria_meta_field']);
        update_term_meta($term_id, 'categoria_meta_field', $meta_value);
    }
}
add_action('created_category', 'salvar_campo_personalizado_categoria', 10, 2);
add_action('edited_category', 'salvar_campo_personalizado_categoria', 10, 2);

// Mostrar valor do campo personalizado "Ordem da Categoria" na página de edição da categoria
function mostrar_campo_personalizado_categoria($term) {
    $meta_value = get_term_meta($term->term_id, 'categoria_meta_field', true);
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="categoria_meta_field">Ordem da Categoria</label></th>
        <td>
            <input type="text" name="categoria_meta_field" id="categoria_meta_field" value="<?php echo esc_attr($meta_value); ?>">
        </td>
    </tr>
    <?php
}
add_action('category_edit_form_fields', 'mostrar_campo_personalizado_categoria', 10, 2);

// Atualizar valor do campo personalizado "Ordem da Categoria" ao editar uma categoria
function atualizar_campo_personalizado_categoria($term_id) {
    if (isset($_POST['categoria_meta_field'])) {
        $meta_value = sanitize_text_field($_POST['categoria_meta_field']);
        update_term_meta($term_id, 'categoria_meta_field', $meta_value);
    }
}
add_action('edited_category', 'atualizar_campo_personalizado_categoria', 10, 2);


// Adicionar coluna personalizada na listagem de categorias no painel do WordPress
function adicionar_coluna_personalizada_categoria($columns) {
    $columns['ordem_categoria'] = 'Ordem da Categoria';
    return $columns;
}
add_filter('manage_edit-category_columns', 'adicionar_coluna_personalizada_categoria');

// Exibir o valor do campo personalizado na coluna personalizada
function exibir_valor_campo_personalizado_categoria($deprecated, $column_name, $term_id) {
    if ($column_name === 'ordem_categoria') {
        $meta_value = get_term_meta($term_id, 'categoria_meta_field', true);
        echo $meta_value;
    }
}
add_action('manage_category_custom_column', 'exibir_valor_campo_personalizado_categoria', 10, 3);

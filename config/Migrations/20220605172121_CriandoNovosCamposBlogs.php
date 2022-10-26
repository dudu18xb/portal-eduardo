<?php
use Migrations\AbstractMigration;

class CriandoNovosCamposBlogs extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $fotos = $this->table('fotos');
        $fotos
            ->addColumn('status', 'boolean', [
                'null' => true,
            ])
            ->changeColumn('blogs_id', 'integer', [
                'null' => true,
            ])
            ->addColumn('about_id', 'integer', [
                'null' => true,
            ]);
        $fotos->update();

        $tipos = $this->table('tipos');
        $tipos
            ->addColumn('titulo', 'string', [
                'null' => false,
            ])
            ->addColumn('slug', 'string', [
                'null' => false,
            ])
            ->addColumn('status', 'boolean', [
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'null' => true,
                'timezone' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'null' => true,
                'timezone' => true,
            ]);
        $tipos->create();

        $blogs = $this->table('blogs');
        $blogs
            ->addColumn('tipo_id', 'integer', [
                'null' => true,
            ])
            ->addColumn('meta_image', 'string', [
                'null' => true,
            ])
            ->addForeignKey('tipo_id', 'tipos');
        $blogs->update();
    }
}

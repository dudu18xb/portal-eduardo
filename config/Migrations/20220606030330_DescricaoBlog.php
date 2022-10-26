<?php
use Migrations\AbstractMigration;

class DescricaoBlog extends AbstractMigration
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
            ->addColumn('descricao', 'text', [
                'null' => true,
            ]);
        $fotos->update();
    }
}

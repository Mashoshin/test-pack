<?php

declare(strict_types=1);

namespace DataLayer\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20211014103258 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create account table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE SEQUENCE account_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE account (id INT NOT NULL, address VARCHAR(68) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('SELECT setval(\'account_id_seq\', (SELECT MAX(id) FROM account))');
        $this->addSql('ALTER TABLE account ALTER id SET DEFAULT nextval(\'account_id_seq\')');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP SEQUENCE account_id_seq CASCADE');
        $this->addSql('DROP TABLE account');
    }
}

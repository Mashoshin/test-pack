<?php

declare(strict_types=1);

namespace DataLayer\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211014105131 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create section table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE SEQUENCE section_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE section (id INT NOT NULL, track_id INT DEFAULT NULL, "order" SMALLINT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_2D737AEF5ED23C43 ON section (track_id)');
        $this->addSql('ALTER TABLE section ADD CONSTRAINT FK_2D737AEF5ED23C43 FOREIGN KEY (track_id) REFERENCES track (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP SEQUENCE section_id_seq CASCADE');
        $this->addSql('DROP TABLE section');
    }
}

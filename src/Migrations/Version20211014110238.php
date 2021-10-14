<?php

declare(strict_types=1);

namespace DataLayer\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211014110238 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create track_result table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE SEQUENCE track_result_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE track_result (id INT NOT NULL, track_id INT DEFAULT NULL, car_id INT DEFAULT NULL, place SMALLINT NOT NULL, points NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_5BA800FA5ED23C43 ON track_result (track_id)');
        $this->addSql('CREATE INDEX IDX_5BA800FAC3C6F69F ON track_result (car_id)');
        $this->addSql('ALTER TABLE track_result ADD CONSTRAINT FK_5BA800FA5ED23C43 FOREIGN KEY (track_id) REFERENCES track (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE track_result ADD CONSTRAINT FK_5BA800FAC3C6F69F FOREIGN KEY (car_id) REFERENCES car (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP SEQUENCE track_result_id_seq CASCADE');
        $this->addSql('ALTER TABLE section_result DROP CONSTRAINT FK_5BA800FA5ED23C43');
        $this->addSql('ALTER TABLE section_result DROP CONSTRAINT FK_5BA800FAC3C6F69F');
        $this->addSql('DROP TABLE track_result');
    }
}

<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180711000715 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bete_race (bete_id INT NOT NULL, race_id INT NOT NULL, INDEX IDX_DE1452B40D64147 (bete_id), INDEX IDX_DE1452B6E59D40D (race_id), PRIMARY KEY(bete_id, race_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_bete (commande_id INT NOT NULL, bete_id INT NOT NULL, INDEX IDX_E390C19982EA2E54 (commande_id), INDEX IDX_E390C19940D64147 (bete_id), PRIMARY KEY(commande_id, bete_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bete_race ADD CONSTRAINT FK_DE1452B40D64147 FOREIGN KEY (bete_id) REFERENCES bete (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bete_race ADD CONSTRAINT FK_DE1452B6E59D40D FOREIGN KEY (race_id) REFERENCES race (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_bete ADD CONSTRAINT FK_E390C19982EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_bete ADD CONSTRAINT FK_E390C19940D64147 FOREIGN KEY (bete_id) REFERENCES bete (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bergerie ADD berger_id INT NOT NULL');
        $this->addSql('ALTER TABLE bergerie ADD CONSTRAINT FK_91F0E24C6B7561BB FOREIGN KEY (berger_id) REFERENCES berger (id)');
        $this->addSql('CREATE INDEX IDX_91F0E24C6B7561BB ON bergerie (berger_id)');
        $this->addSql('ALTER TABLE bete ADD bergerie_id INT NOT NULL');
        $this->addSql('ALTER TABLE bete ADD CONSTRAINT FK_88FCC07ACE34D277 FOREIGN KEY (bergerie_id) REFERENCES bergerie (id)');
        $this->addSql('CREATE INDEX IDX_88FCC07ACE34D277 ON bete (bergerie_id)');
        $this->addSql('ALTER TABLE commande ADD client_id INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D19EB6921 ON commande (client_id)');
        $this->addSql('ALTER TABLE livraison ADD commande_id INT NOT NULL');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('CREATE INDEX IDX_A60C9F1F82EA2E54 ON livraison (commande_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE bete_race');
        $this->addSql('DROP TABLE commande_bete');
        $this->addSql('ALTER TABLE bergerie DROP FOREIGN KEY FK_91F0E24C6B7561BB');
        $this->addSql('DROP INDEX IDX_91F0E24C6B7561BB ON bergerie');
        $this->addSql('ALTER TABLE bergerie DROP berger_id');
        $this->addSql('ALTER TABLE bete DROP FOREIGN KEY FK_88FCC07ACE34D277');
        $this->addSql('DROP INDEX IDX_88FCC07ACE34D277 ON bete');
        $this->addSql('ALTER TABLE bete DROP bergerie_id');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D19EB6921');
        $this->addSql('DROP INDEX IDX_6EEAA67D19EB6921 ON commande');
        $this->addSql('ALTER TABLE commande DROP client_id');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F82EA2E54');
        $this->addSql('DROP INDEX IDX_A60C9F1F82EA2E54 ON livraison');
        $this->addSql('ALTER TABLE livraison DROP commande_id');
    }
}

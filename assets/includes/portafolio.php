<?php
    $json = file_get_contents('assets/data/portafolio.json');
    $data = json_decode($json, true);

    foreach(($data['portafolio'] ?? []) as $proyecto):
        $nombre = htmlspecialchars($proyecto['nombre'] ?? '', ENT_QUOTES, 'UTF-8');
        $descripcion = htmlspecialchars($proyecto['descripcion'] ?? '', ENT_QUOTES, 'UTF-8');
        $url = htmlspecialchars($proyecto['url'] ?? '', ENT_QUOTES, 'UTF-8');

?>

    <div class="col-md-6">
        <div class="portfolio-item wow fadeInUp">
            <div class="portfolio-item-image">
                <a 
                    href="<?= $url ?>" 
                    data-cursor-text="View"
                    target="_blank"
                    rel="noopener noreferrer"     
                >
                    <iframe 
                        src="<?= $url ?>" 
                        width="700" 
                        height="800" 
                        title="Proyecto <?= $nombre ?>"
                    ></iframe>
                </a>
            </div>
            <div class="portfolio-item-body">
                <div class="portfolio-item-content">
                    <h2>
                        <a 
                            href="<?= $url ?>"
                            target="_blank"
                            rel="noopener noreferrer" 
                        >
                            <?= $nombre ?>
                        </a>
                    </h2>
                    <p>
                        <?= $descripcion ?>
                    </p>
                    <p>
                        <a 
                            href="<?= $url ?>"
                            target="_blank" 
                            rel="noopener noreferrer"    
                        >
                            Ver Más
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php 
    endforeach; 
?>


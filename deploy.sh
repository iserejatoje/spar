#!/bin/sh

echo "Rsync"
rsync -avz docs/assets/app.min.js docs/assets/app.min.css studioatom_spar@studioatom.beget.tech:local/templates/SPAR/assets
#rsync -avz docs/images docs/svg studioatom_spar@studioatom.beget.tech:local/templates/SPAR
echo "Rsync done!"
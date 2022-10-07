#!/bin/sh

echo "Rsync..."
rsync -avz docs studioatom_spar@studioatom.beget.tech:
echo "Rsync done!"
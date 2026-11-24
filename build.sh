#!/usr/bin/env bash
# Rendert die PHP-Seiten zu statischem HTML in dist/ (wird vom GitHub-Workflow aufgerufen).
set -euo pipefail
cd "$(dirname "$0")"

rm -rf dist
mkdir -p dist

# Seiten = alle PHP-Dateien, die header.php einbinden (ohne die Vorlage)
for page in $(grep -l "include 'header.php'" *.php | grep -v '^vorlage\.php$'); do
    php -f "$page" > "dist/${page%.php}.html"
done

# Interne Links von .php auf .html umstellen
sed -i -E 's/([A-Za-z0-9_-]+)\.php([#"])/\1.html\2/g' dist/*.html

cp -r css img font js robots.txt dist/
rm -f dist/css/*.map

echo "Built $(ls dist/*.html | wc -l) pages into dist/"

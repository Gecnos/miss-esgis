#!/bin/bash

# Nom du dossier à lister (par défaut: dossier actuel)
DIR=${1:-.}

# Nom du fichier de sortie
OUTPUT_FILE="arborescence.txt"

# Génère l'arborescence avec indentation
echo "📂 Arborescence du projet : $DIR" > "$OUTPUT_FILE"
echo "--------------------------------------------------" >> "$OUTPUT_FILE"

tree -a -I 'node_modules|vendor|.git|storage|*.log|*.lock' --charset utf-8 "$DIR" >> "$OUTPUT_FILE"

echo -e "\n✅ Arborescence sauvegardée dans $OUTPUT_FILE"

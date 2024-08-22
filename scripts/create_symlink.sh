#!/bin/bash

# Create a symlink for public_html pointing to the public directory in your repo
ln -sfn /home/patunganyuk/repo/patungan-lp/public/ /home/patunganyuk/public_html/

# Set permissions for the symlink target if needed
find /home/patunganyuk/public_html -type d -exec chmod 755 {} \;
find /home/patunganyuk/public_html -type f -exec chmod 644 {} \;

echo "Symlink created and permissions set."

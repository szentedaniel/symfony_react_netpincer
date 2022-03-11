#!/bin/bash

find . -type f -name \*.js -exec sh -c 'echo "import React from "react"\n$(cat $(dirname {})/$(basename {} ))" > $(dirname {})/$(basename {} )' \;
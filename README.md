# Form Finisher: form2database

## About

This TYPO3 extension is a *form finisher* that stores submitted form data into a database table.

## Requirements

- TYPO3 v10 LTS

## Installation

### Command Line with "composer"

```bash
composer require schams-net/form2database
```

## Configuration

```yaml
...
finishers:
  -
    identifier: SaveToDatabase
    options:
      table: 'tx_form2database_domain_model_forms'
      databaseColumnMappings:
        pid:
          value: '0'
      elements:
        text-1:
          mapOnDatabaseColumn: 'first_name'
        text-2:
          mapOnDatabaseColumn: 'last_name'
        text-3:
          mapOnDatabaseColumn: 'email'
...
```

## License

The MIT License

Copyright (c) 2020 Michael Schams, https://schams.net

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files
(the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge,
publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

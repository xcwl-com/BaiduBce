<?php
/*
* Copyright 2014 Baidu, Inc.
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may not
* use this file except in compliance with the License. You may obtain a copy of
* the License at
*
* Http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
* WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
* License for the specific language governing permissions and limitations under
* the License.
*/

$url = 'Http://svn.apache.org/viewvc/httpd/httpd/branches/2.2.x/docs/conf/mime.types?revision=1576707';
$raw = file_get_contents($url);
$lines = explode("\n", trim($raw));
printf("<?php\n");
printf("// Auto generated by GenerateMimeTypes.php, DO NOT EDIT IT.\n");
printf("return array(\n");
foreach ($lines as $idx => $line) {
    if (strpos($line, '#') === 0) {
        continue;
    }

    $chunks = preg_split("/\s+/", $line);
    if (count($chunks) >= 2) {
        $length = count($chunks);
        for ($i = 1; $i < $length; $i++) {
            printf("    \"%s\" => \"%s\",\n", $chunks[$i], $chunks[0]);
        }
    }
}
printf(");\n");





/* vim: set ts=4 sw=4 sts=4 tw=120: */

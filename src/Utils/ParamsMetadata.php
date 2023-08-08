<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Utils;

class ParamsMetadata
{
    public string $type;
    public string $style;
    public bool $explode;
    public string $name;
    public string $serialization;
    public string $dateTimeFormat;

    public static function parse(string $metadata): ParamsMetadata | null
    {
        $prefix = explode(":", $metadata, 2);
        if (count($prefix) !== 2) {
            return null;
        }

        $type = $prefix[0];

        $metadata = removePrefix($metadata, $type . ":");

        $style = "";
        $explode = false;
        $name = "";
        $serialization = "";
        $dateTimeFormat = "";

        switch ($type) {
            case "queryParam":
                $style = "form";
                $explode = true;
                break;
            case "header":
                $style = "simple";
                $explode = false;
                break;
            case "pathParam":
                $style = "simple";
                $explode = false;
                break;
        }

        $options = explode(",", $metadata);

        foreach ($options as $opt) {
            $parts = explode("=", $opt);
            if (count($parts) < 1 || count($parts) > 2) { /** @phpstan-ignore-line */
                continue;
            }

            switch ($parts[0]) {
                case "name":
                    $name = $parts[1];
                    break;
                case "style":
                    $style = $parts[1];
                    break;
                case "explode":
                    $explode = $parts[1] === "true";
                    break;
                case "serialization":
                    $serialization = $parts[1];
                    break;
                case "dateTimeFormat":
                    $dateTimeFormat = $parts[1];
                    break;
            }
        }

        return new ParamsMetadata($type, $style, $explode, $name, $serialization, $dateTimeFormat);
    }

    private function __construct(string $type, string $style, bool $explode, string $name, string $serialization, string $dateTimeFormat)
    {
        $this->type = $type;
        $this->style = $style;
        $this->explode = $explode;
        $this->name = $name;
        $this->serialization = $serialization;
        $this->dateTimeFormat = $dateTimeFormat;
    }
}

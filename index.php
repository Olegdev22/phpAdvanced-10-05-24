<?php
/*
class Logger
{

    private $format;
    private $delivery;

    public function __construct($format, $delivery)
    {
        $this->format = $format;
        $this->delivery = $delivery;
    }

    public function log($string)
    {
        $this->deliver($this->format($string));
    }

    public function format($string)
    {
        switch ($this->format) {
            case 'raw' :
                {
                    return $string;
                }
                break;
            case 'with_date':
                {
                    return date('Y-m-d H:i:s') . $string;
                }
                break;
            case 'with_date_and_details':
                {
                    return date('Y-m-d H:i:s') . $string . ' - With some details';
                }
                break;
            default:
            {
                die('Error format');
            }
        }
    }

    public function deliver($format)
    {
        switch ($this->delivery) {
            case 'by_email' :
                {
                    echo "Вывод формата ({$format}) по имейл";
                }
                break;
            case 'by_sms':
                {
                    echo "Вывод формата ({$format}) в смс";
                }
                break;
            case 'to_console':
                {
                    echo "Вывод формата ({$format}) в консоль";
                }
                break;
            default:
            {
                die('Error deliver');
            }
        }
    }

}

$logger = new Logger('raw', 'by_sms');
$logger->log('Emergency error! Please fix me!');*/


// Refactoring Open/Close principle
interface FormaterInterface
{
    public function format(string $string): string;
}

interface DeliveryInterface
{
    public function delivery(string $formattedString): void;
}

// Классы-реализации для форматов (расширения)
class RawFormatter implements FormaterInterface
{
    public function format(string $string): string
    {
        return $string;
    }
}

class DateFormatter implements FormaterInterface
{
    public function format(string $string): string
    {
        return date('Y-m-d H:i:s') . $string;
    }
}

class DetailsDateFormatter implements FormaterInterface
{
    public function format(string $string): string
    {
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}

// Классы-реализации для доставки (расширения)
class EmailDelivery implements DeliveryInterface
{

    public function delivery(string $formattedString): void
    {
        echo "Вывод формата ({$formattedString}) по имейл\n";
    }
}

class SmsDelivery implements DeliveryInterface
{
    public function delivery(string $formattedString): void
    {
        echo "Вывод формата ({$formattedString}) в смс\n";
    }
}

class ConsoleDelivery implements DeliveryInterface
{
    public function delivery(string $formattedString): void
    {
        echo "Вывод формата ({$formattedString}) в консоль\n";
    }
}

// Переписываем класс (закрываем для изменений)
class Logger
{
    private FormaterInterface $formatter;
    private DeliveryInterface $delivery;

    public function __construct(FormaterInterface $formatter, DeliveryInterface $delivery)
    {
        $this->formatter = $formatter;
        $this->delivery = $delivery;
    }

    public function log($string): void
    {
        $formattedString = $this->formatter->format($string);
        $this->delivery->delivery($formattedString);
    }
}

$logger = new Logger(new  RawFormatter(), new SmsDelivery());
$logger->log('Emergency error! Please fix me!');

// Нужен другой формат и способ доставки? Просто меняем компоненты
$dataLogger = new Logger(new DetailsDateFormatter(), new ConsoleDelivery());
$dataLogger->log('Emergency error! Please fix me!');
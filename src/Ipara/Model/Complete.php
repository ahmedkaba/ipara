<?php

namespace Payconn\Ipara\Model;

use Payconn\Common\AbstractModel;
use Payconn\Common\Model\CompleteInterface;
use Payconn\Ipara\Product;
use Symfony\Component\HttpFoundation\ParameterBag;

class Complete extends AbstractModel implements CompleteInterface
{
    protected ParameterBag $returnParams;

    protected string $firstName;

    protected string $lastName;

    protected string $email;

    protected array $products;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    public function setReturnParams(array $returnParams): void
    {
        $this->returnParams = new ParameterBag($returnParams);
    }

    public function getReturnParams(): ParameterBag
    {
        return $this->returnParams;
    }
}

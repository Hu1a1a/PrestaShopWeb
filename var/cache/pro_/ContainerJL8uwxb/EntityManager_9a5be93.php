<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7c618 = null;
    private $initializer2a19d = null;
    private static $publicPropertiese1d08 = [
        
    ];
    public function getConnection()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getConnection', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getMetadataFactory', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getExpressionBuilder', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'beginTransaction', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getCache', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getCache();
    }
    public function transactional($func)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'transactional', array('func' => $func), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'commit', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->commit();
    }
    public function rollback()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'rollback', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getClassMetadata', array('className' => $className), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'createQuery', array('dql' => $dql), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'createNamedQuery', array('name' => $name), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'createQueryBuilder', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'flush', array('entity' => $entity), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'clear', array('entityName' => $entityName), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->clear($entityName);
    }
    public function close()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'close', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->close();
    }
    public function persist($entity)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'persist', array('entity' => $entity), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'remove', array('entity' => $entity), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'refresh', array('entity' => $entity), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'detach', array('entity' => $entity), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'merge', array('entity' => $entity), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'contains', array('entity' => $entity), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getEventManager', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getConfiguration', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'isOpen', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getUnitOfWork', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getProxyFactory', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'initializeObject', array('obj' => $obj), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'getFilters', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'isFiltersStateClean', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'hasFilters', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return $this->valueHolder7c618->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer2a19d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder7c618) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7c618 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder7c618->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, '__get', ['name' => $name], $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        if (isset(self::$publicPropertiese1d08[$name])) {
            return $this->valueHolder7c618->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c618;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7c618;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c618;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7c618;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, '__isset', array('name' => $name), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c618;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder7c618;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, '__unset', array('name' => $name), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c618;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder7c618;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, '__clone', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        $this->valueHolder7c618 = clone $this->valueHolder7c618;
    }
    public function __sleep()
    {
        $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, '__sleep', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
        return array('valueHolder7c618');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2a19d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2a19d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer2a19d && ($this->initializer2a19d->__invoke($valueHolder7c618, $this, 'initializeProxy', array(), $this->initializer2a19d) || 1) && $this->valueHolder7c618 = $valueHolder7c618;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7c618;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7c618;
    }
}

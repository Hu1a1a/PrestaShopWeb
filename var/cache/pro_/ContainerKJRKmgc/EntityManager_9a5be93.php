<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder15419 = null;
    private $initializera8cc1 = null;
    private static $publicPropertiesa9d09 = [
        
    ];
    public function getConnection()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getConnection', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getMetadataFactory', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getExpressionBuilder', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'beginTransaction', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getCache', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getCache();
    }
    public function transactional($func)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'transactional', array('func' => $func), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'wrapInTransaction', array('func' => $func), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'commit', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->commit();
    }
    public function rollback()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'rollback', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getClassMetadata', array('className' => $className), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'createQuery', array('dql' => $dql), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'createNamedQuery', array('name' => $name), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'createQueryBuilder', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'flush', array('entity' => $entity), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'clear', array('entityName' => $entityName), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->clear($entityName);
    }
    public function close()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'close', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->close();
    }
    public function persist($entity)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'persist', array('entity' => $entity), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'remove', array('entity' => $entity), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'refresh', array('entity' => $entity), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'detach', array('entity' => $entity), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'merge', array('entity' => $entity), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getRepository', array('entityName' => $entityName), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'contains', array('entity' => $entity), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getEventManager', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getConfiguration', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'isOpen', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getUnitOfWork', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getProxyFactory', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'initializeObject', array('obj' => $obj), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'getFilters', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'isFiltersStateClean', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'hasFilters', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return $this->valueHolder15419->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera8cc1 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder15419) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder15419 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder15419->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, '__get', ['name' => $name], $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        if (isset(self::$publicPropertiesa9d09[$name])) {
            return $this->valueHolder15419->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder15419;
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
        $targetObject = $this->valueHolder15419;
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
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder15419;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder15419;
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
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, '__isset', array('name' => $name), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder15419;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder15419;
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
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, '__unset', array('name' => $name), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder15419;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder15419;
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
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, '__clone', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        $this->valueHolder15419 = clone $this->valueHolder15419;
    }
    public function __sleep()
    {
        $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, '__sleep', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
        return array('valueHolder15419');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8cc1 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8cc1;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera8cc1 && ($this->initializera8cc1->__invoke($valueHolder15419, $this, 'initializeProxy', array(), $this->initializera8cc1) || 1) && $this->valueHolder15419 = $valueHolder15419;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder15419;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder15419;
    }
}

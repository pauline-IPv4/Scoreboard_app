<?php

namespace ContainerH9JxfxC;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0df82 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf2e29 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties649cf = [
        
    ];

    public function getConnection()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getConnection', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getMetadataFactory', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getExpressionBuilder', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'beginTransaction', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getCache', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'transactional', array('func' => $func), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'commit', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->commit();
    }

    public function rollback()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'rollback', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getClassMetadata', array('className' => $className), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'createQuery', array('dql' => $dql), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'createNamedQuery', array('name' => $name), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'createQueryBuilder', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'flush', array('entity' => $entity), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'clear', array('entityName' => $entityName), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->clear($entityName);
    }

    public function close()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'close', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->close();
    }

    public function persist($entity)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'persist', array('entity' => $entity), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'remove', array('entity' => $entity), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'refresh', array('entity' => $entity), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'detach', array('entity' => $entity), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'merge', array('entity' => $entity), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'contains', array('entity' => $entity), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getEventManager', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getConfiguration', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'isOpen', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getUnitOfWork', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getProxyFactory', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'initializeObject', array('obj' => $obj), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'getFilters', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'isFiltersStateClean', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'hasFilters', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return $this->valueHolder0df82->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf2e29 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0df82) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0df82 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0df82->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, '__get', ['name' => $name], $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        if (isset(self::$publicProperties649cf[$name])) {
            return $this->valueHolder0df82->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0df82;

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

        $targetObject = $this->valueHolder0df82;
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
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0df82;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0df82;
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
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, '__isset', array('name' => $name), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0df82;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0df82;
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
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, '__unset', array('name' => $name), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0df82;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0df82;
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
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, '__clone', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        $this->valueHolder0df82 = clone $this->valueHolder0df82;
    }

    public function __sleep()
    {
        $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, '__sleep', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;

        return array('valueHolder0df82');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf2e29 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf2e29;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf2e29 && ($this->initializerf2e29->__invoke($valueHolder0df82, $this, 'initializeProxy', array(), $this->initializerf2e29) || 1) && $this->valueHolder0df82 = $valueHolder0df82;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0df82;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0df82;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

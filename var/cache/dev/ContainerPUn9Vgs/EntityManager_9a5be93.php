<?php

namespace ContainerPUn9Vgs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder063ac = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1dd75 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf1b3f = [
        
    ];

    public function getConnection()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getConnection', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getMetadataFactory', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getExpressionBuilder', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'beginTransaction', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getCache', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'transactional', array('func' => $func), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'commit', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->commit();
    }

    public function rollback()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'rollback', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getClassMetadata', array('className' => $className), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'createQuery', array('dql' => $dql), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'createNamedQuery', array('name' => $name), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'createQueryBuilder', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'flush', array('entity' => $entity), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'clear', array('entityName' => $entityName), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->clear($entityName);
    }

    public function close()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'close', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->close();
    }

    public function persist($entity)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'persist', array('entity' => $entity), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'remove', array('entity' => $entity), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'refresh', array('entity' => $entity), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'detach', array('entity' => $entity), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'merge', array('entity' => $entity), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'contains', array('entity' => $entity), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getEventManager', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getConfiguration', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'isOpen', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getUnitOfWork', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getProxyFactory', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'initializeObject', array('obj' => $obj), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'getFilters', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'isFiltersStateClean', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'hasFilters', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return $this->valueHolder063ac->hasFilters();
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

        $instance->initializer1dd75 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder063ac) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder063ac = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder063ac->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, '__get', ['name' => $name], $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        if (isset(self::$publicPropertiesf1b3f[$name])) {
            return $this->valueHolder063ac->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder063ac;

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

        $targetObject = $this->valueHolder063ac;
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
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder063ac;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder063ac;
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
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, '__isset', array('name' => $name), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder063ac;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder063ac;
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
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, '__unset', array('name' => $name), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder063ac;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder063ac;
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
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, '__clone', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        $this->valueHolder063ac = clone $this->valueHolder063ac;
    }

    public function __sleep()
    {
        $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, '__sleep', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;

        return array('valueHolder063ac');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1dd75 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1dd75;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1dd75 && ($this->initializer1dd75->__invoke($valueHolder063ac, $this, 'initializeProxy', array(), $this->initializer1dd75) || 1) && $this->valueHolder063ac = $valueHolder063ac;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder063ac;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder063ac;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

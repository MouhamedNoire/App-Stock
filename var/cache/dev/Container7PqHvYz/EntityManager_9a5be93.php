<?php

namespace Container7PqHvYz;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder81a89 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf9cd2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa69b7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getConnection', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getMetadataFactory', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getExpressionBuilder', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'beginTransaction', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getCache', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'transactional', array('func' => $func), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'commit', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->commit();
    }

    public function rollback()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'rollback', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getClassMetadata', array('className' => $className), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'createQuery', array('dql' => $dql), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'createNamedQuery', array('name' => $name), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'createQueryBuilder', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'flush', array('entity' => $entity), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'clear', array('entityName' => $entityName), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->clear($entityName);
    }

    public function close()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'close', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->close();
    }

    public function persist($entity)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'persist', array('entity' => $entity), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'remove', array('entity' => $entity), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'refresh', array('entity' => $entity), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'detach', array('entity' => $entity), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'merge', array('entity' => $entity), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'contains', array('entity' => $entity), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getEventManager', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getConfiguration', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'isOpen', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getUnitOfWork', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getProxyFactory', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'initializeObject', array('obj' => $obj), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'getFilters', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'isFiltersStateClean', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'hasFilters', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return $this->valueHolder81a89->hasFilters();
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

        $instance->initializerf9cd2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder81a89) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder81a89 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder81a89->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, '__get', ['name' => $name], $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        if (isset(self::$publicPropertiesa69b7[$name])) {
            return $this->valueHolder81a89->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81a89;

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

        $targetObject = $this->valueHolder81a89;
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
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81a89;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder81a89;
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
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, '__isset', array('name' => $name), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81a89;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder81a89;
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
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, '__unset', array('name' => $name), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder81a89;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder81a89;
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
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, '__clone', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        $this->valueHolder81a89 = clone $this->valueHolder81a89;
    }

    public function __sleep()
    {
        $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, '__sleep', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;

        return array('valueHolder81a89');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf9cd2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf9cd2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf9cd2 && ($this->initializerf9cd2->__invoke($valueHolder81a89, $this, 'initializeProxy', array(), $this->initializerf9cd2) || 1) && $this->valueHolder81a89 = $valueHolder81a89;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder81a89;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder81a89;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
